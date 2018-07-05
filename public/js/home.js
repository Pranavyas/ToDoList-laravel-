


    $("#btnbtm").click(function(){

        $("#i5").hide();

        

        $('#cont').show();    
     
     });

$("#i1").hide();
$("#i2").hide();
$("#i3").hide();
$("#i4").hide();
$("#i6").hide();
$("#i7").hide();
$("#i8").hide();
$("#i9").hide();
    
       /////////  ANIMATION /////////////

    $("#i5").click(function(){
        
        $("#i1").delay(1000).fadeIn(500);
        $("#i1").delay(2000).fadeOut(500);
        
        $("#i2").delay(4000).fadeIn(500);
        $("#i2").delay(2000).fadeOut(500);

        $("#i3").delay(7000).fadeIn(500);
        $("#i3").delay(2000).fadeOut(500);
        
        $("#i4").delay(10000).fadeIn(500);
        $("#i4").delay(2000).fadeOut(500);
             
        $("#i6").delay(13000).fadeIn(500);
        $("#i6").delay(2000).fadeOut(500);
        
        $("#i7").delay(16000).fadeIn(500);
        $("#i7").delay(2000).fadeOut(500);
        
        $("#i8").delay(19000).fadeIn(500);
        $("#i8").delay(2000).fadeOut(500);

        $("#i9").delay(22000).fadeIn(500);
        $("#i9").delay(2000).fadeOut(500);

        $("#i0").delay(25000).fadeIn(500);
        $("#i0").delay(2000).fadeOut(500);

    });
      //////////// ANIMATION //////////////


        $("#btn").click(function(){
            
            
            $("#left-edit").toggle();
            
        });


        $(".btn1").click(function(){

            var a= $(this).val();

            alert("You sure do you want to edit "+a);

        });

        
        $("#search").click(function(){
            
           window.location.replace('/search');


        });


   

      
        
$("#add").click(function(){

//     <div class="form-group">
//     <label for="task1"><b>Task:</b></label>
//     <input type="text" class="form-control" name="task1">
// </div>
    // alert("#add clicked");

    var a=$(" <div class='form-group'>");
    var b=$("<label for='task[]'><b>Task:</b></label>");
    var c=$("<input type='text' class='form-control itask' name='task[]'>");
    var br=$("<br>");

    $(".add").append(a).append(b).append(c).append(br);



});


$(".ram").click( function(){

        var a=$(this).parent().parent().find('span').text();
    
        alert("you are sure do you want to delete-"+a);

    });


    $(".check").on('change', function (){
        
                   var a=$(this).parent().find('span').text();
                
                    
                   window.location.replace("/check/"+a);

                });

                $("#in").keyup(function(){
                    
                    var a= $("#in").val();

                    if(a==" "){

                        alert(empty);

                    }

                    
                    $.ajax({   
                
                        headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                            
                        type:"post",
                        url: "input",
                        data: "a="+a,
                        success: function(data){
                
                          // console.log(data["msg"]);

               

                        for (i in data["msg"]){

                            var a=data.msg[i].task;

                            var len= a.length;
                            
                            a=a.substring(1,len-1).split(",");
                            var len1=a.length;
                            console.log(a[2]);
  
                            var res="";   
  
                            var res1="";
  
                            var res2="";
  
                            var t="";
                
                
                             res+= '<div class="cook" style="display:inline-block;width:400px;height:400px;overflow:auto ;margin:0 2 5 20;border:2px solid red">'
                                +'<div class="w3-container" >'
                                +'<div style="width:400px;">'
                                +'<h1 style="display:inline-block;width:250px; " class="w3-text-teal "><b><span>'+data.msg[i].title+'</span> </b></h1><br>'
                                +'</div>'
                                +'</div><h3 class="w3-opacity" style="display:inline-block; width:70px">  <b> <strong> TASK: </strong>  </b></h3>';
                                
                                
                               
                            for(j=0;j<len1;j++){

                                res1+= '<li class="w3-xxxlarge glyphicon glyphicon-arrow-right style="display:inline-block"><h2 class="w3-text-teal" style="display:inline-block; margin-left:100 px;width:300px" > '+ a[j] +'</h2></li><hr>';
                          
                            }
                            
                            res2= '</div>';

                              
                            
                             t+= res.concat(res1).concat(res2);

                        }
                



                               $("#show").html(t);
                
                            
                        }

                    });
                                    
                 });
                
                            

                            
$("#btnlist").click(function(){

var id = 12;    
$.ajax({
    method: 'POST', 
    url: '/ajax', 
    data: {'id' : id}, 
     success: function(response){
        alert(response); 
    },
    error: function(jqXHR, textStatus, errorThrown) { 
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
});

});
        

