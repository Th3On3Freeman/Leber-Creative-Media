<html>  
    <head>  
        <title>Test App Project</title>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">   
        <style type="text/css">  
            
            /*CSS for scrollable image container (DESKTOP)*/
            .cover-container {
                height: 525.98px;
                width: 800px;
                margin: auto;
                white-space: nowrap;
                overflow-x: hidden;
                overflow-y: scroll;
            }
            
            /*CSS for scrollable image container (MOBILE)*/
            @media (max-device-width: 640px)
            {
                .cover-container
                {
                    width: 240px;
                    height: 159px;
                }
            }
            
            /*CSS for individual images*/
            .cover-item {
                display:block;
                margin-left: auto;
                margin-right: auto;
                box-shadow: 2px 2px 4px #bbb;
                border-top-right-radius: 4px;
                max-height: 100%;
                max-width: 100%;
                vertical-align: bottom;
                background-position: top left;
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            /*Scrollbar CSS*/
            ::-webkit-scrollbar {
                width: 12px;
            }
            
            /* Scrollbar CSS-Track */
            ::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
                -webkit-border-radius: 10px;
                border-radius: 10px;
            }
            
            /* Scrollbar CSS-Handle */
            ::-webkit-scrollbar-thumb {
                -webkit-border-radius: 10px;
                border-radius: 10px;
                background: rgba(44, 62, 80, 1);
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
            }
            ::-webkit-scrollbar-thumb:window-inactive {
                background: rgba(44, 62, 80, 0.6);
            }
            
        </style>  
    </head>  
    <body>  
        <div class="container">  
            <div class="row searchArea">  
                <div class="col-md-4"></div>
                <div class="col-md-4">  
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Test App Project</h2>
                        </div>
                    </div>
                    
                    <!--Search Field-->
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <label for="search_field">Search: </label>
                            <input id="search_field" type="text">
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    
                    <!--Search Button-->
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="button" class="btn btn-success" id="button" onclick="search()">Find photos</button>  
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <hr>  
                </div>  
                <div class="col-md-4"></div>
            </div>  
            
            <!--Scrollable Image Container-->
            <div class="row-fluid">  
                <div class="col-lg-12 col-md-10">
                    <div id="results" class="cover-container">
                    </div>
                </div>  
            </div>
            
            <!--Next/Previous Buttons to switch between images-->
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-4">
                    <button type="button" class="btn btn-danger display" id="previousButton">Previous</button>  
                    <button type="button" class="btn btn-primary display" id="nextButton">Next</button>  
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>  
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>  
            
            //Function for searching for images based on text in search field
            function search() {
                //Clear previous images
                document.getElementById("results").innerHTML = "";
                
                //Get search query
                var search_val = document.getElementById("search_field").value; 
            
                //Call flickr api search function
                var apiurl_search = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=a4413710c2532081a1dd59a000857b2c&tags="+ search_val +"&safe_search=1";
                
                //Initialize img src variable
                var src;
                
                //Get JSON data for flickr api search results
                $.getJSON(apiurl_search + "&format=json&jsoncallback=?",function(data){
                    
                    //Process each individual image from the search query
                    $.each(data.photos.photo,function(i,myresult){

                      //Build the image from the search results (MOBILE)
                        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4)))
                        {
                            src = "http://farm"+ myresult.farm +".static.flickr.com/" + myresult.server + "/" + myresult.id + "_" + myresult.secret +"_m.jpg";
                        } //end if
                        
                        //Build the image from the search results (DESKTOP)
                        else 
                        {
                            src = "http://farm"+ myresult.farm +".static.flickr.com/" + myresult.server + "/" + myresult.id + "_" + myresult.secret +"_c.jpg";
                        } //end else

                        //Append the resulting image to the scrollable image container
                        $("<img class='cover-item' />").attr("src", src).appendTo("#results");   

                        //Limit the search results to 25 images
                        if (i == 24) return false;
                    });  
                });  
            }
            
            //Ensure that when the user clicks the enter key after typing in the search field, that the search results will be calculated and presented to the user
            $(document).ready(function(){
                $("#search_field").keyup(function(event){
                    if(event.keyCode == 13){
                        $("#button").click();
                    }
                });
            })
            
            //Initialize image counter variable for Next/Previous
            var currImageNum = 0;
            
            //When Next or previous buttons are clicked, move to the next or previous image within the scrollable field depending on which button was pressed
            $('button.display').on('click', function(e) {
                e.preventDefault();
                
                //Initialize scroll height calculation variable
                var height;
                
                //Set height variable (MOBILE)
                if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4)))
                    {
                        height = 151.05;
                    } //end if
                    
                    //Set height variable (DESKTOP)
                    else
                    {
                        height = 525.98;
                    } //end else
                
                //Determine button that was pressed (Next or Previous)
                var t = $(this).text();
                
                //Move to next image
                if (t === 'Next' && currImageNum < 25) 
                {
                    $('#results').animate({scrollTop: '+='+height+'px' }, 'slow');
                    currImageNum++;
                } 
                
                //Move to previous image
                else if (t === 'Previous' && currImageNum > 0) 
                {
                    $('#results').animate({scrollTop: '-='+height+'px' }, 'slow');
                    currImageNum--;
                } //end else if
            }); //end onclick
        </script>
    </body>  
</html>  