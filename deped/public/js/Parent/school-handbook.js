
         $(document).ready(function(){
           var oTable = $('#sampleTable').DataTable({
             "orderCellsTop": false,
             "searchHighlight" : true,
           });
           $('#search').keyup(function(){
                 oTable.search($(this).val()).draw() ;
           });
           $(".dataTables_filter").hide();
           oTable.on('order.dt search.dt', function(){
             oTable.column(0, {search:'applied', order:'applied'}).nodes().each(
              function (cell, i) {
               cell.innerHTML = i+1;
               } );
           }).draw();
         });

  
  // JS printing manual 
    // function printDiv(divName) {
    //      var printContents = document.getElementById(divName).innerHTML;
    //      var originalContents = document.body.innerHTML;

    //      document.body.innerHTML = printContents;

    //      window.print();

    //      document.body.innerHTML = originalContents;
    // }

    $("#btnPrint").on("click", function () {

      var divName = $('#pageFld').val();
      // alert (divName)
      var printContents = document.getElementById(divName).innerHTML;

      // var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;

      window.print();
      location.reload();
      // document.body.innerHTML = originalContents;
    });




  // <!-- JS for manual -->

    /*
     * Turn.js responsive book
     */

    /*globals window, document, $*/

    // (function () {
    //     'use strict';
    //     var module = {
    //         ratio: 1.38,
    //         init: function (id) {
    //             var me = this;

    //             // if older browser then don't run javascript
    //             if (document.addEventListener) {
    //                 this.el = document.getElementById(id);
    //                 this.resize();
    //                 this.plugins();

    //                 // on window resize, update the plugin size
    //                 window.addEventListener('resize', function (e) {
    //                     var size = me.resize();
    //                     $(me.el).turn('size', size.width, size.height);
    //                 });
    //             }
    //         },
    //         resize: function () {
    //             // reset the width and height to the css defaults
    //             this.el.style.width = '';
    //             this.el.style.height = '';

    //             var width = this.el.clientWidth,
    //                 height = Math.round(width / this.ratio),
    //                 padded = Math.round(document.body.clientHeight * 0.9);

    //             // if the height is too big for the window, constrain it
    //             if (height > padded) {
    //                 height = padded;
    //                 width = Math.round(height * this.ratio);
    //             }

    //             // set the width and height matching the aspect ratio
    //             this.el.style.width = width + 'px';
    //             this.el.style.height = height + 'px';

    //             return {
    //                 width: width,
    //                 height: height
    //             };
    //         },
    //         plugins: function () {
    //             // run the plugin
    //             $(this.el).turn( {
    //                 gradients: true,
    //                 acceleration: true,
    //                 width: 800,
    //                 autoCenter: true
    //             });
    //             // hide the body overflow
    //             document.body.className = 'hide-overflow';
    //         }
    //     };

    //     module.init('book');

    // }());

    $("#pageFld").val($("#book").turn("page"));

    $("#book").bind("turned", function(event, page, view) {
        $("#pageFld").val(page);
    });

    $("#pageFld").change(function() {
        $("#book").turn("page", $(this).val());
    });

    $("#prevBtn").click(function() {
        $("#book").turn("previous");
    });

    $("#nextBtn").click(function() {
        $("#book").turn("next");
    });
    // </script>
    // <script type="text/javascript">
     function printPage(){
        window.print();
     }
  
    /*
 * Turn.js responsive book
 */

/*globals window, document, $*/

(function () {
    'use strict';

    var module = {
        ratio: 1.38,
        init: function (id) {
            var me = this;

            // if older browser then don't run javascript
            if (document.addEventListener) {
                this.el = document.getElementById(id);
                this.resize();
                this.plugins();

                // on window resize, update the plugin size
                window.addEventListener('resize', function (e) {
                    var size = me.resize();
                    $(me.el).turn('size', size.width, size.height);
                });
            }
        },
        resize: function () {
            // reset the width and height to the css defaults
            this.el.style.width = '';
            this.el.style.height = '';

            var width = this.el.clientWidth,
                height = Math.round(width / this.ratio),
                padded = Math.round(document.body.clientHeight * 0.9);

            // if the height is too big for the window, constrain it
            if (height > padded) {
                height = padded;
                width = Math.round(height * this.ratio);
            }

            // set the width and height matching the aspect ratio
            this.el.style.width = width + 'px';
            this.el.style.height = height + 'px';

            return {
                width: width,
                height: height
            };
        },
        plugins: function () {
            // run the plugin
            $(this.el).turn({
                gradients: true,
                acceleration: true
            });
            // hide the body overflow
            document.body.className = 'hide-overflow';
        }
    };

    module.init('book');
}());

