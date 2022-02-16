
jQuery(document).ready(function() {
 google.maps.event.addDomListener(window, 'load', function() {
    var places = new google.maps.places.Autocomplete(document
            .getElementById('bcity'));
    google.maps.event.addListener(places, 'place_changed', function() {
        var place = places.getPlace();
        var address = place.formatted_address;
        var  value = address.split(",");
        if(value!=''){
            count=value.length;
             city=value[0];
             document.getElementById("bcity").value = city;
        }
        

    });
});




    var name = decodeURIComponent(getUrlVars()['name']);
    var email = decodeURIComponent(getUrlVars()['email']);
    var phone = decodeURIComponent(getUrlVars()['phone']);
    var designation = decodeURIComponent(getUrlVars()['designation']);
    var user_level = decodeURIComponent(getUrlVars()['user_level']);
    var user_status = decodeURIComponent(getUrlVars()['user_status']);

    var baddr1 =decodeURIComponent(getUrlVars()['baddr1']);
    var baddr2 =decodeURIComponent(getUrlVars()['baddr2']);
    var bpincode =decodeURIComponent(getUrlVars()['bpincode']);
    var bstate =decodeURIComponent(getUrlVars()['bstate']);
    var bcity =decodeURIComponent(getUrlVars()['bcity']);

    var aadhar =decodeURIComponent(getUrlVars()['aadhar']);
    var pan =decodeURIComponent(getUrlVars()['pan']);
    var bank_name=decodeURIComponent( getUrlVars()['bank_name']);
    var acc_no=decodeURIComponent( getUrlVars()['acc_no']);
    var ifsc=decodeURIComponent( getUrlVars()['ifsc']);
    var branch=decodeURIComponent( getUrlVars()['branch']);
    var type_account=decodeURIComponent( getUrlVars()['type_account']);
    var city=decodeURIComponent( getUrlVars()['city']);

    if(name != undefined && name != '' && name != 'undefined'){
        $("#name").val(name);  
        $("#bank_acc_name").val(name);      
    }
    if(acc_no != undefined && acc_no != '' && acc_no != 'undefined'){
        $("#bank_acc_no").val(acc_no);                 
    }
    if(ifsc != undefined && ifsc != '' && ifsc != 'undefined'){
        $("#ifsc_code").val(ifsc);                 
    }
    if(branch != undefined && branch != '' && branch != 'undefined'){
        $("#branch_name").val(branch);                 
    }
    if(city != undefined && city != '' && city != 'undefined'){
        $("#bank_city").val(city);                 
    }
    if(email != undefined && email !='' && email != 'undefined'){
        console.log(222);
        $("#email").val(email);
    }
    if(pan != undefined && pan != 'undefined' && pan != ''){
        $("#pan_number").val(pan);
    }
    if(phone != undefined && phone != '' && phone != 'undefined'){
        console.log(333);
        $("#mobile").val(phone);
    }
    if(aadhar != undefined && aadhar != '' && aadhar != 'undefined'){
        console.log(333);
        $("#txtAadhar").val(aadhar);
    }
    if(designation !=undefined && designation!='' && designation !='undefined'){
        $("#designation").val(designation);   
    }
     if(baddr1 !=undefined && baddr1!='' && baddr1 !='undefined'){
        $("#baddr1").val(baddr1);   
    }

    if(baddr2 !=undefined && baddr2 !='undefined' && baddr2!=''){
        $("#baddr2").val(baddr2);
    }

     if(bpincode !=undefined && bpincode !='undefined' && bpincode!=''){
        $("#bpincode").val(bpincode);
    }

    if(bcity !=undefined && bcity !='undefined' && bcity!='' ){
        $("#bcity").val(bcity);
    }

    if(bstate !=undefined && bstate !='undefined' && bstate!='' && bpincode == ''){
        $("#bstate").val(bstate);
    }

    

    $('#status').on('change', function() {
        var val=$(this).val();
        if(val==0){
              $('#user_status').prop('disabled',true);
              $("#employee_status").val(1);
        }else{
              $('#user_status').prop('disabled',false);
              $("#employee_status").val(0);

        }        
      
    });


     $('#aadhaar').keyup(function() {
        var value = $(this).val();
        value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join(" ");
        $(this).val(value);
    });

    $("#search_bar").hide();
    var id = getUrlVars()['id'];
    if (id != undefined) {
        $("#head_txt").html("Edit Employee");
        $("#btval").html("Update Employee");
        $("#search_bar").hide();
       
        $("#ac").css("display","block");
        async = false;

    } else {
        $("#head_txt").html("Add Employee");
        $("#btval").html("Add Employee");
        $("#search_bar").show();   
          
        $("#ac").css("display","none");
        async = true;
    }


    $('.userEditForm').on('submit', function(e) {

        var data = $('.userEditForm').serialize();
        var name = $("#name").val();
        var email = $("#email").val();
        var mobile = $("#mobile").val();
        var pan = $("#pan").val();
        var validatemail = validateemail(email);
        var validatepan = $("#panvalid").val();
        var level = $("#user_level").val();


       
        if (name == '') {
            parent.alert({
                'msg': 'Please enter the name',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
            return false;
        } else if (email == '') {
            parent.alert({
                'msg': 'Please enter the email',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
            return false;
        } else if (email != '' && validatemail == false) {
            parent.alert({
                'msg': 'Please enter the valid email',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
            return false;
        } else if (mobile != '' && isNaN(mobile)) {
            parent.alert({
                'msg': 'Please enter the valid mobile number',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
            return false;
        }else if(level ==''){
            parent.alert({
                'msg': 'Please select the user level',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
             return false;
        }else if (pan != '' && validatepan == '0') {
            parent.alert({
                'msg': 'Please enter the valid pan number',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_tax"]').trigger('click');
            return false;
        } else {
            var liveurl;
            var fulldate;
            if (id != undefined) {
                liveurl = Ledgers.API + "employee/edit-employee";
                fulldate = data + "&id=" + id;
            } else {
                liveurl = Ledgers.API + "employee/add-employee";
                fulldate = data;
            }

            $.ajax({
                type: "POST",
                url: liveurl,
                dataType: "JSON",
                data: fulldate,
                success: function(result) {
                    if (result.status == '1') {
                        parent.alert({
                            'msg': result.msg,
                            'type': 'success'
                        });
                        parent.iframe_close();
                        parent.employee_callback(result);

                    } else {
                        parent.alert({
                            'msg': result.msg,
                            'type': 'danger'
                        });
                        return false;
                    }
                }
            });
        }
        e.preventDefault();

    });



  $.ajax({
        type: "POST",
        url: Ledgers.API + "helper/helper",
        dataType: "JSON",
        async: async,
        data: {
            listing: 'state_country_payment'
        },
        success: function(bank_list) {
            var bank_list_data = bank_list;

            for (var i = 0; i < (bank_list['state'].length); i++) {
                $("#bstate").append('<option value="' + bank_list['state'][i]['state'] + '">' + bank_list['state'][i]['state'] + '</option>');

            }
            for (var i = 0; i < (bank_list['country'].length); i++) {
                $("#bcountry").append('<option value="' + bank_list['country'][i]['country'] + '">' + bank_list['country'][i]['country'] + '</option>');
            }

            $('#bstate').val("TAMIL NADU");
            $('#bcountry').val("INDIA");
        }
    });

    $("input[name = 'bpincode']").focusout(function() {
        var pincode = $("input[name = 'bpincode']").val();
        $.ajax({
            type: "POST",
            url: Ledgers.API + "helper/helper",
            dataType: "JSON",
            async: async,
            data: {
                'listing': 'pincode',
                'pincode': pincode
            },
            success: function(result) {
                if (result.status == '1') {
                    if (result.data[0]['state'] == 'OTHER TERRITORY') {
                        $("#others").prop("readonly", false);
                    } else {
                        $("#others").prop("readonly", true);
                    }

                    $("#bstate").val(result.data[0]['state']);
                    $("input[name = 'bcity']").val(result.data[0]['district']);
                    $("#bcountry").val(result.data[0]['country']);

                } else {
                    $("input[name = 'bcity']").val("");

                }
            }
        });
    });

    $('#bcountry').change(function() {
        if (this.value!='INDIA') {
         
         $("#statehtml").html('<input type="text" class="form-control" name="bstate" id="bstate">');
         
       }else{
                     
         $("#statehtml").html(' <select class="form-control state-list" name="bstate" id="bstate">                                            </select>');
   var statearray=[];
   $.ajax({
       type: "POST",
       url: Ledgers.API + "helper/helper",
       dataType: "JSON",
       data: {
           listing: 'state_country_payment'
       },
       success: function(bank_list) {
           var bank_list_data = bank_list;
            statearray=bank_list['state'];
          // console.log(statearray);
           for (var i = 0; i < (bank_list['state'].length); i++) {
               $("#bstate").append('<option value="' + bank_list['state'][i]['state'] + '">' + bank_list['state'][i]['state'] + '</option>');

           }

           $('#bstate').val(bank_list.business_state);
         
       }
   });      
       }
   });

$("#pan_number").focusout(function() {
        var pannumber = $("#pan_number").val();
         var r;
                $.ajax({
                  type: "POST",
                  url: Ledgers.API+"helper/helper",
                  dataType: "JSON",
                  async:false,
                  data: {
                    'pan':pannumber,
                    'listing': 'pan_validation',
                    // bid:'ODlHSC9ZeGdtVXoyUi9VZjlZMWdTdz09'
                  },
                  success: function(data) {
                    if (data['status'] == 1) {
                      parent.alert({'msg':'Valid PAN','type':'success'});
                    }
                    else{
                      parent.alert({'msg':'Invalid PAN','type':'warning'});
                    }  
                    r = data['status'];
                  },
                  error: function(data) {
                    parent.alert({'msg':'Connection Error','type':'warning'});
                  }
                });
                return r;

});


    


      $.ajax({
        type: "POST",
        url: Ledgers.API + "helper/helper",
        dataType: "JSON",
        async: async,
        data: {
            'listing': 'bank_list'
        },
        success: function(bank_list) {
            let sel='';
            if (bank_list.status == '1') {
                 console.log(bank_list['bank'].length+'length')
                for (var i = 0; i < (bank_list['bank'].length); i++) {
                   // console.log(bank_list['bank'][i]['bank']+'bank_name')
                   if(bank_list['bank'][i]['bank']==bank_name)
                    {
                        sel='selected';
                    }
                    else{
                        sel='';
                    }
                    $("#bank_name").append('<option value="' + bank_list['bank'][i]['bank'] + '" '+sel+'>' + bank_list['bank'][i]['bank'] + '</option>');
                }
            }
        }
    });

      $('#bank_name').change(function() {
         $("#bank_city").val("");
          $("#ifsc_code").val("");
        var bank_name = $(this).val();
            $.ajax({
            type: "POST",
            url: Ledgers.API +"helper/helper",
            dataType : "JSON",
            async: false,
            data: {'listing': 'branch_list','bank_name':bank_name},
            success: function(branch_list)
            { 
                if(branch_list.status=='1'){
                    $("#branch_name").empty();

                     for (var i = 0; i < (branch_list.branch.length); i++) {
                          $("#branch_name").append('<option value="'+branch_list.branch[i]['branch']+'">' + branch_list.branch[i]['branch'] + '</option>');

                     }
                }          

            }
            });
    });

      $('#branch_name').change(function() {
        var branch_name = $(this).val();
        var bank_name=$("#bank_name").val();
            $.ajax({
            type: "POST",
           // async: async,
            url: Ledgers.API +"helper/helper",
            dataType : "JSON",
            data: {'listing': 'branch_detail','branch_name':branch_name,'bank_name':bank_name},
            success: function(branch_list)
            { 
                    if(branch_list.status=='1'){
                             $("#bank_city").val(branch_list.branch_detail[0].city);
                             $("#ifsc_code").val(branch_list.branch_detail[0].ifsc);
                    }
                  

            }
            });
    });

getbranch();
if (id != undefined) {
        getemployee(id);
    }

    
});

function getbranch(){
      $.ajax({
        type: "POST",
        url: Ledgers.API + "place/list-place",
        data: {
            'operation': 'branch-list'
        },
        dataType: "JSON",
        success: function(result) {
            if (result.status == '1') {
                for (var i = 0; i < (result['place'].length); i++) {
                    if(i==0)
                    {
                        $("#branch_id").append('<option value="' + result['place'][i]['id'] + '" selected>' + result['place'][i]['branch_name'] + '</option>');
                    }
                    else
                    {
                        $("#branch_id").append('<option value="' + result['place'][i]['id'] + '">' + result['place'][i]['branch_name'] + '</option>');
                    }
                    
                }
            }
        }
    });
}


function getemployee(id) {
    $.ajax({
        type: "POST",
        url: Ledgers.API + "employee/get-employee",
        data: {
            'id': id
        },
        async: async,
        dataType: "JSON",
        success: function(result) {
            console.log(result.employee[0].bank);
            console.log(Object.values(result.employee[0].bank));
            var bank_details=Object.keys(result.employee[0].bank);
            var bank_acc_details=Object.values(result.employee[0].bank);
            
            
            $("#title").val(result.employee[0].title);
            $("#name").val(result.employee[0].name);
            $("#group_emp_name").val(result.employee[0].name);
            console.log("dob",result.employee[0].dob);
            if(result.employee[0].dob)
            {
                var datearray = result.employee[0].dob.split("-");
                $("#dob").val(datearray[2]+"/"+datearray[1]+"/"+datearray[0]);
                var date = datearray[2]+"/"+datearray[1]+"/"+datearray[0]; 
                var datearray = date.split("/");
                var d = new Date();
                var n = d.getFullYear();
                var diff=n-datearray[2];
                if(diff>0)
                {
                $("#age").val(diff-1);
                }
            }
            $("#email").val(result.employee[0].email);
            if(result.employee[0].email!=''){
                 $("#email").prop("readonly",true);
            }
            $("#mobile").val(result.employee[0].mobile);
            $("#status").val(result.employee[0].status);
            if(result.employee[0].status==0){
                 $('#user_status').prop('disabled',true);
            }else{
                 $('#user_status').prop('disabled',false);
             }
            $("#user_status").val(result.user[0].status);
            console.log(result.user[0].user_level);
            $("#user_level").val(result.user[0].user_level);
            if(result.user[0].user_level=="1")
            {
                $("#user_level").prop("disabled",true);
                $('#user_status').prop('disabled',true);
                $("#status").prop('disabled',true);
            }
            $("#baddr1").val(result.employee[0].addr1);
            $("#baddr2").val(result.employee[0].addr2);
            $("#bcity").val(result.employee[0].city);
            $("#bpincode").val(result.employee[0].pincode);
            $("#bcountry").val(result.employee[0].country); 
            $("#pf").val(result.employee[0].pf); 
            $("#esi").val(result.employee[0].esi); 
            if(result.employee[0].country!='INDIA'){
                $("#statehtml").html(' <input type="text" class="form-control state-list" name="bstate" id="bstate" />');       
            }   
                
            $("#bstate").val(result.employee[0].state); 
            $("#aadhaar").val(result.employee[0].aadhaar_number);     
            $("#designation").val(result.employee[0].designation);     
            $("#pan_number").val(result.employee[0].pan); 
            $("#txtAadhar").val(result.employee[0].aadhaar_number); 
            let branch_id=result.employee[0].branch_id
            $.ajax({
                type: "POST",
                url: Ledgers.API + "place/list-place",
                data: {
                    'operation': 'branch-list'
                },
                dataType: "JSON",
                success: function(result1) {
                    if (result1.status == '1') {
                        for (var i = 0; i < (result1['place'].length); i++) {
                            if(result1['place'][i]['id']==branch_id)
                            {
                                $("#branch_id").append('<option value="' + result1['place'][i]['id'] + '" selected>' + result1['place'][i]['branch_name'] + '</option>');
                            }
                            else
                            {
                                $("#branch_id").append('<option value="' + result1['place'][i]['id'] + '">' + result1['place'][i]['branch_name'] + '</option>');
                            }
                            
                        }
                    }
                }
            });
            
           





               
           // }

           // console.log(result.employee[0].bank);
           //console.log(result.employee[0].bank)
           if(result.employee[0].bank['type']==0)
           {
            $("#ac").css("display","none");
           }
           else{   
            $("#ac").css("display","block");

             if(bank_details){

           

            bank_details.forEach(function(value,key){  
                if(value!='')
                {                
                    $("#account_number").append('<option value="' + value + '" >' + value + '</option>');       
                }    
            });
            
               $("#account_number").append('<option value="1" >Add New Account</option>');
            

                 
                $("#bank_acc_name").val(bank_acc_details[0]['name']);
                $("#bank_acc_no").val(bank_acc_details[0]['acc_no']);
                $("#bank_name").val(bank_acc_details[0]['bank']);    
                $("#branch_name").val(bank_acc_details[0]['branch']);
                $("#bank_city").val(bank_acc_details[0]['city']);
                $("#ifsc_code").val(bank_acc_details[0]['ifsc']);
                $("#account_type").val(bank_acc_details[0]['type']);
                
            //    if(result.employee[0].bank.branch!=undefined || result.employee[0].bank.branch!='undefined'){
            //          if ( $("#branch_name option[value='"+result.employee[0].bank.branch+"']").length == 0 ){
            //          $("#branch_name").append('<option selected>'+result.employee[0].bank.branch+'</option>');
            //     }else{
            //          $("#branch_name").val(result.employee[0].bank.branch);
            //     }
            //    }
              
                

                }
            }
        }
    });
}



function validatepan() {
    var pan = $("#pan").val();
    var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
    if (pan == '') {
        $("#panvalid").val("");
    } else {
        if (regpan.test(pan)) {
            $("#panvalid").val("1");
        } else {
            $("#panvalid").val("0");

        }
    }

} 



function validateemail(email) {
    var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,12}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    var valid = emailReg.test(email);
    if (!valid) {
        return false;
    } else {
        return true;
    }
}

function getUrlVars() {
    var vars = [],
        hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

function AadharValidate() {
        var aadhar = document.getElementById("txtAadhar").value;
        var adharcardTwelveDigit = /^\d{12}$/;
        var adharSixteenDigit = /^\d{16}$/;
        if (aadhar != '') {
            if (aadhar.match(adharcardTwelveDigit)) {
                parent.alert({'msg':'Valid Aadhar Number','type':'success'});
                return true;
            }
            else if (aadhar.match(adharSixteenDigit)) {
                parent.alert({'msg':'Valid Aadhar Number','type':'success'});
                return true;
            }
            else {
                parent.alert({'msg':'Enter valid Aadhar Number','type':'danger'});
                return false;
            }
        }
    }
 
