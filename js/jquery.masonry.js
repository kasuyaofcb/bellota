/*************************************************
**  jQuery Masonry version 1.3.2
**  Copyright David DeSandro, licensed MIT
**  http://desandro.com/resources/jquery-masonry
**************************************************/
;(function(jQuery){  

  /*!
   * smartresize: debounced resize event for jQuery
   * http://github.com/lrbabe/jquery-smartresize
   *
   * Copyright (c) 2009 Louis-Remi Babe
   * Licensed under the GPL license.
   * http://docs.jquery.com/License
   *
   */
  var event = jQuery.event,
      resizeTimeout;

  event.special.smartresize = {
    setup: function() {
      jQuery(this).bind( "resize", event.special.smartresize.handler );
    },
    teardown: function() {
      jQuery(this).unbind( "resize", event.special.smartresize.handler );
    },
    handler: function( event, execAsap ) {
      // Save the context
      var context = this,
          args = arguments;

      // set correct event type
      event.type = "smartresize";

      if (resizeTimeout) { clearTimeout(resizeTimeout); }
      resizeTimeout = setTimeout(function() {
        jQuery.event.handle.apply( context, args );
      }, execAsap === "execAsap"? 0 : 100);
    }
  };

  jQuery.fn.smartresize = function( fn ) {
    return fn ? this.bind( "smartresize", fn ) : this.trigger( "smartresize", ["execAsap"] );
  };



  // masonry code begin
  jQuery.fn.masonry = function(options, callback) { 

    // all my sweet methods
    var msnry = {
      getBricks : function(jQuerywall, props, opts) {
        var hasItemSelector = (opts.itemSelector === undefined);
        if ( opts.appendedContent === undefined ) {
          // if not appendedContent
          props.jQuerybricks = hasItemSelector ?
                jQuerywall.children() :
                jQuerywall.find(opts.itemSelector);
        } else {
         //  if appendedContent...
         props.jQuerybricks = hasItemSelector ?
                opts.appendedContent : 
                opts.appendedContent.filter( opts.itemSelector );
        }
      },
      
      placeBrick : function(jQuerybrick, setCount, setY, props, opts) {
            // get the minimum Y value from the columns...
        var minimumY = Math.min.apply(Math, setY),
            setHeight = minimumY + jQuerybrick.outerHeight(true),
            i = setY.length,
            shortCol = i,
            setSpan = props.colCount + 1 - i;
        // Which column has the minY value, closest to the left
        while (i--) {
          if ( setY[i] == minimumY ) {
            shortCol = i;
          }
        }
            
        var position = {
          left: props.colW * shortCol + props.posLeft,
          top: minimumY
        };
            
        // position the brick
        jQuerybrick.applyStyle(position, jQuery.extend(true,{},opts.animationOptions) );

        // apply setHeight to necessary columns
        for ( i=0; i < setSpan; i++ ) {
          props.colY[ shortCol + i ] = setHeight;
        }
      },
      
      setup : function(jQuerywall, opts, props) {
        msnry.getBricks(jQuerywall, props, opts);

        if ( props.masoned ) {
          props.previousData = jQuerywall.data('masonry');
        }

        if ( opts.columnWidth === undefined) {
          props.colW = props.masoned ?
              props.previousData.colW :
              props.jQuerybricks.outerWidth(true);
        } else {
          props.colW = opts.columnWidth;
        }

        props.colCount = Math.floor( jQuerywall.width() / props.colW ) ;
        props.colCount = Math.max( props.colCount, 1 );
      },
      
      arrange : function(jQuerywall, opts, props) {
        var i;

        if ( !props.masoned || opts.appendedContent !== undefined ) {
          // just the new bricks
          props.jQuerybricks.css( 'position', 'absolute' );
        }

        // if masonry hasn't been called before
        if ( !props.masoned ) { 
          jQuerywall.css( 'position', 'relative' );

          // get top left position of where the bricks should be
          var jQuerycursor = jQuery( document.createElement('div') );
          jQuerywall.prepend( jQuerycursor );
          props.posTop =  Math.round( jQuerycursor.position().top );
          props.posLeft = Math.round( jQuerycursor.position().left );
          jQuerycursor.remove();
        } else {
          props.posTop =  props.previousData.posTop;
          props.posLeft = props.previousData.posLeft;
        }
        
        // set up column Y array
        if ( props.masoned && opts.appendedContent !== undefined ) {
          // if appendedContent is set, use colY from last call
          props.colY = props.previousData.colY;

          /*
          *  in the case that the wall is not resizeable,
          *  but the colCount has changed from the previous time
          *  masonry has been called
          */
          for ( i = props.previousData.colCount; i < props.colCount; i++) {
            props.colY[i] = props.posTop;
          }

        } else {
          // start new colY array, with starting values set to posTop
          props.colY = [];
          i = props.colCount;
          while (i--) {
            props.colY.push(props.posTop);
          }
        }

        // are we animating the rearrangement?
        // use plugin-ish syntax for css or animate
        jQuery.fn.applyStyle = ( props.masoned && opts.animate ) ? jQuery.fn.animate : jQuery.fn.css;


        // layout logic
        if ( opts.singleMode ) {
          props.jQuerybricks.each(function(){
            var jQuerybrick = jQuery(this);
            msnry.placeBrick(jQuerybrick, props.colCount, props.colY, props, opts);
          });      
        } else {
          props.jQuerybricks.each(function() {
            var jQuerybrick = jQuery(this),
                //how many columns does this brick span
                colSpan = Math.ceil( jQuerybrick.outerWidth(true) / props.colW);
            colSpan = Math.min( colSpan, props.colCount );

            if ( colSpan === 1 ) {
              // if brick spans only one column, just like singleMode
              msnry.placeBrick(jQuerybrick, props.colCount, props.colY, props, opts);
            } else {
              // brick spans more than one column

              //how many different places could this brick fit horizontally
              var groupCount = props.colCount + 1 - colSpan,
                  groupY = [];

              // for each group potential horizontal position
              for ( i=0; i < groupCount; i++ ) {
                // make an array of colY values for that one group
                var groupColY = props.colY.slice(i, i+colSpan);
                // and get the max value of the array
                groupY[i] = Math.max.apply(Math, groupColY);
              }

              msnry.placeBrick(jQuerybrick, groupCount, groupY, props, opts);
            }
          }); //    /props.bricks.each(function() {
        }  //     /layout logic

        // set the height of the wall to the tallest column
        props.wallH = Math.max.apply(Math, props.colY);
        var wallCSS = { height: props.wallH - props.posTop };
        jQuerywall.applyStyle( wallCSS, jQuery.extend(true,[],opts.animationOptions) );

        // add masoned class first time around
        if ( !props.masoned ) { 
          // wait 1 millisec for quell transitions
          setTimeout(function(){
            jQuerywall.addClass('masoned'); 
          }, 1);
        }

        // provide props.bricks as context for the callback
        callback.call( props.jQuerybricks );

        // set all data so we can retrieve it for appended appendedContent
        //    or anyone else's crazy jquery fun
        jQuerywall.data('masonry', props );
        
      }, // /msnry.arrange
      
      resize : function(jQuerywall, opts, props) {
        props.masoned = !!jQuerywall.data('masonry');
        var prevColCount = jQuerywall.data('masonry').colCount;
        msnry.setup(jQuerywall, opts, props);
        if ( props.colCount != prevColCount ) {
          msnry.arrange(jQuerywall, opts, props);
        }
      }
    };


    /*
    *  let's begin
    *  IN A WORLD...
    */
    return this.each(function() {  

      var jQuerywall = jQuery(this),
          props = {};

      // checks if masonry has been called before on this object
      props.masoned = !!jQuerywall.data('masonry');
    
      var previousOptions = props.masoned ? jQuerywall.data('masonry').options : {},
          opts =  jQuery.extend(
                    {},
                    jQuery.fn.masonry.defaults,
                    previousOptions,
                    options
                  ),
          resizeOn = previousOptions.resizeable;

      // should we save these options for next time?
      props.options = opts.saveOptions ? opts : previousOptions;

      //picked up from Paul Irish
      callback = callback || function(){};

      msnry.getBricks(jQuerywall, props, opts);

      // if brickParent is empty, do nothing, go back home and eat chips
      if ( !props.jQuerybricks.length ) { 
        return this; 
      }

      // call masonry layout
      msnry.setup(jQuerywall, opts, props);
      msnry.arrange(jQuerywall, opts, props);
    
      // binding window resizing
      if ( !resizeOn && opts.resizeable ) {
        jQuery(window).bind('smartresize.masonry', function() { msnry.resize(jQuerywall, opts, props); } );
      }
      if ( resizeOn && !opts.resizeable ) { 
        jQuery(window).unbind('smartresize.masonry'); 
      }
       

    });    //    /return this.each(function()
  };      //    /jQuery.fn.masonry = function(options)


  // Default plugin options
  jQuery.fn.masonry.defaults = {
    singleMode: false,
    columnWidth: undefined,
    itemSelector: undefined,
    appendedContent: undefined,
    saveOptions: true,
    resizeable: true,
    animate: false,
    animationOptions: {}
  };

})(jQuery);