$(document).ready(function(){
       $('#bt-editresume').click(function(){ // Edit Resume
        $.ajax({
                url: "user/editresume",
                cache: false,
                  type:"POST",
                  data:$("#form-resume").serialize(),
                     success:function(res){
                      if(res="ok"){
                         alert("Success!");
                         location.reload();
                        }
                  },
                          error:function(err){
                          alert("Error!");
                          }
                
           }); 
                   
       });
       
    $('#bt-addwork-interest').click(function(){ // Edit Resume
        $.ajax({
                url: "user/workinterest/add",
                cache: false,
                  type:"POST",
                  data:$("#frmaddwork-interest").serialize(),
                     success:function(res){
                      if(res="ok"){
                         alert("Success!");
                        location.reload(); 
                         $("#tb_frmeditwork-interest").html();
                        }
 
                  },
                          error:function(err){
                          alert("Error!");
                          }
                   }); 
           });
           
           $('#bt-editwork-interest').click(function(){ // Edit Resume
        $.ajax({
                url: "user/workinterest/edit",
                cache: false,
                  type:"POST",
                  data:$("#frmeditwork-interest").serialize(),
                     success:function(res){
                      if(res="ok"){
                         alert("Success!");
                       location.reload();
                       $("#tb_frmeditwork-interest").html();
                         }
                             
                  },
                          error:function(err){
                          alert("Error!");
                          }
                   }); 
           });
           
                $('#bt-addeducation').click(function(){ // Edit Resume
                     $.ajax({
                        url: "user/education/add",
                        cache: false,
                          type:"POST",
                          data:$("#frm_add_education").serialize(),
                             success:function(res){
                                        if(res="ok"){
                         //          alert($("#frm_add_education").serialize());
                                   alert("Success!");
                                 location.reload();
                               //  $("#tb_frmeditwork-interest").html();
                                   }

                            },
                          error:function(err){
                          alert("Error!");
                          }
                   }); 
           });
           
           $('#bt-editeducation').click(function(){ // Edit Resume
                     $.ajax({
                        url: "user/education/edit",
                        cache: false,
                          type:"POST",
                          data:$("#frm_edit_education").serialize(),
                             success:function(res){
                                        if(res="ok"){
                         //          alert($("#frm_add_education").serialize());
                                   alert("Success!");
                                 location.reload();
                               //  $("#tb_frmeditwork-interest").html();
                                   }

                            },
                          error:function(err){
                          alert("Error!");
                          }
                   }); 
           });
       
        $('#bt-addhistory').click(function(){ // Edit Resume
                     $.ajax({
                        url: "user/history/add",
                        cache: false,
                          type:"POST",
                          data:$("#frm_add_history").serialize(),
                             success:function(res){
                                        if(res="ok"){
                                // alert($("#frm_add_้history").serialize());
                                 alert("Success!");
                                location.reload();
                               //  $("#tb_frmeditwork-interest").html();
              
                                   }

                            },
                          error:function(err){
                          alert("Error!");
                          }
                   }); 
           });
           
                   $('#bt-edithistory').click(function(){ // Edit Resume
                     $.ajax({
                        url: "user/history/edit",
                        cache: false,
                          type:"POST",
                          data:$("#frm_edit_history").serialize(),
                             success:function(res){
                                        if(res="ok"){
                               //  alert($("#frm_edit_้history").serialize());
                                 alert("Success!");
                                location.reload();
                               //  $("#tb_frmeditwork-interest").html();
              
                                   }

                            },
                          error:function(err){
                          alert("Error!");
                          }
                   }); 
           });
           
             $('#bt-addtraining').click(function(){ // Edit Resume
                     $.ajax({
                        url: "user/training/add",
                        cache: false,
                          type:"POST",
                          data:$("#frm_add_training").serialize(),
                             success:function(res){
                                        if(res="ok"){
                                // alert($("#frm_add_้history").serialize());
                                 alert("Success!");
                                location.reload();
                               //  $("#tb_frmeditwork-interest").html();
              
                                   }

                            },
                          error:function(err){
                          alert("Error!");
                          }
                   }); 
           });
           
               $('#bt-edittraining').click(function(){ // Edit Resume
                     $.ajax({
                        url: "user/training/edit",
                        cache: false,
                          type:"POST",
                          data:$("#frm_edit_training").serialize(),
                             success:function(res){
                                        if(res="ok"){
                                // alert($("#frm_add_้history").serialize());
                                 alert("Success!");
                                location.reload();
                               //  $("#tb_frmeditwork-interest").html();
              
                                   }

                            },
                          error:function(err){
                          alert("Error!");
                          }
                   }); 
           });
           
             $('#bt-addresult').click(function(){ // Edit Resume
                     $.ajax({
                        url: "user/result/add",
                        cache: false,
                          type:"POST",
                          data:$("#frm_add_result").serialize(),
                             success:function(res){
                                        if(res="ok"){
                                // alert($("#frm_add_้history").serialize());
                                    alert("Success!");
                                     location.reload();
                               //  $("#tb_frmeditwork-interest").html();
              
                                   }

                            },
                          error:function(err){
                          alert("Error!");
                          }
                   }); 
           });
           
             $('#bt-editresult').click(function(){ // Edit Resume
                     $.ajax({
                        url: "user/result/edit",
                        cache: false,
                          type:"POST",
                          data:$("#frm_edit_result").serialize(),
                             success:function(res){
                                        if(res="ok"){
                                // alert($("#frm_add_้history").serialize());
                                 alert("Success!");
                                location.reload();
                               //  $("#tb_frmeditwork-interest").html();
              
                                   }

                            },
                          error:function(err){
                          alert("Error!");
                          }
                   }); 
           });
           
            $("#bt-chpass").click(function(){
               $.ajax({
                   url:"user/changepass",
                   cache:false,
                   type:"POST",
                   data:$("#frm_chpass").serialize(),
                   success:function(res){
                       if(res=="ok"){
                           alert("Success");
                           location.reload();
                       }
                   },
                           error:function(err) {
                            alert("Error");
                           }
                   
               });
            });
	 
}); // end document.ready
