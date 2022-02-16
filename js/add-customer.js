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



/*var pathnames = window.location.pathname+window.location.search;
    var separteurl=decodeURIComponent(pathnames);
    console.log(separteurl)*/
    //console.log(getUrlVars()['name']+'tat');

    var cname= decodeURIComponent(getUrlVars()['name']);
    var cemail=decodeURIComponent( getUrlVars()['email']);
    var cphone=decodeURIComponent( getUrlVars()['phone']);
    
    var display_name= decodeURIComponent(getUrlVars()['display_name']);
    var baddr1= decodeURIComponent(getUrlVars()['baddr1']);
    var baddr2= decodeURIComponent(getUrlVars()['baddr2']);
    var bpincode=decodeURIComponent( getUrlVars()['bpincode']);
    var bstate=decodeURIComponent( getUrlVars()['bstate']);
    var saddr1= decodeURIComponent(getUrlVars()['saddr1']);
    var saddr2= decodeURIComponent(getUrlVars()['saddr2']);
    var spincode=decodeURIComponent( getUrlVars()['spincode']);
    var sstate=decodeURIComponent( getUrlVars()['sstate']);
    var sgstins=decodeURIComponent( getUrlVars()['gstin']);
    var cpan=decodeURIComponent( getUrlVars()['pan']);
    var cbank_name=decodeURIComponent( getUrlVars()['bank_name']);
    var cacc_no=decodeURIComponent( getUrlVars()['acc_no']);
    var cifsc=decodeURIComponent( getUrlVars()['ifsc']);
    var cbranch=decodeURIComponent( getUrlVars()['branch']);
    var ctype_account=decodeURIComponent( getUrlVars()['type_account']);
    var ccity=decodeURIComponent( getUrlVars()['city']);
   

    if(cname != undefined && cname != '' && cname != 'undefined'){
        $("#name").val(cname);  
        $("#bank_acc_name").val(cname);      
    }
    if(cacc_no != undefined && cacc_no != '' && cacc_no != 'undefined'){
        $("#bank_acc_no").val(cacc_no);                 
    }

    if(cifsc != undefined && cifsc != '' && cifsc != 'undefined'){
        $("#ifsc_code").val(cifsc);                 
    }
    if(cbranch != undefined && cbranch != '' && cbranch != 'undefined'){
        $("#branch_name").val(cbranch);                 
    }
    if(ccity != undefined && ccity != '' && ccity != 'undefined'){
        $("#bank_city").val(ccity);                 
    }
    if(cemail != undefined && cemail !='' && cemail != 'undefined'){
        console.log(222);
        $("#email").val(cemail);
    }
    if(cpan != undefined && cpan != 'undefined' && cpan != ''){
        $("#pan").val(cpan);
    }
    if(cphone != undefined && cphone != '' && cphone != 'undefined'){
        console.log(333);
        $("#mobile").val(cphone);
    }
    if(display_name != undefined && display_name !='undefined' && display_name != ''){
        $("#display_name").val(display_name);
    }
     if(baddr1 !=undefined && baddr1!='' && baddr1 !='undefined'){
        $("#baddr1").val(baddr1);
        $("#same_address").prop("checked", false);
        $("#shipping_address").show();
        $('#checkbox_addr').val("off");
         
    }

    if(baddr2 !=undefined && baddr2 !='undefined' && baddr2!=''){
        $("#baddr2").val(baddr2);
    }

     if(bpincode !=undefined && bpincode !='undefined' && bpincode!=''){
        $("#bpincode").val(bpincode);
    }


    if(bstate !=undefined && bstate !='undefined' && bstate!='' && bpincode == ''){
        $("#bstate").val(bstate);
    }

    if(saddr1 !=undefined && saddr1 !='undefined' && saddr1!=''){
        $("#saddr1").val(saddr1);
    }
    
    if(saddr2 !=undefined && saddr2 !='undefined' && saddr2!=''){
        $("#saddr2").val(saddr2);
    }
    
    if(spincode !=undefined && spincode !='undefined' && spincode!=''){
        $("#spincode").val(spincode);
    }
    
    if(sstate !=undefined && sstate !='undefined' && sstate!='' && spincode==''){
        $("#sstate").val(sstate);
    }
    
     if(sgstins !=undefined && sgstins !='undefined' && sgstins!=''){
        $("#custgstin").val(sgstins);
    }

   

google.maps.event.addDomListener(window, 'load', function() {
    var places = new google.maps.places.Autocomplete(document
            .getElementById('scity'));
    google.maps.event.addListener(places, 'place_changed', function() {
        var place = places.getPlace();
        var address = place.formatted_address;
        var  value = address.split(",");
        if(value!=''){
            count=value.length;
             city=value[0];
             document.getElementById("scity").value = city;
        }
    });
});
    
     $("#name").focusout(function() {
        var nameval=$("#name").val();
        var checkname=validateemail(nameval);
        if(checkname==true){
            parent.alert({
                'msg': 'Please enter the name',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');

        }
     });

    var bgstin=1;
    var sgstin=1;
    //$('.m-tabs-line a[href="#m_portlet_tab_addr"]').trigger('click');
  //  $("#custgstin").prop("readonly", true);
  //  $("#custgstin").prop('required', false);
    $("#custportal").hide();
    $('#custreg').change(function() {
        var value = $(this).val();
        if (value == '0') {
            $("#custgstin").prop("readonly", true);
            $("#companreq").hide();
            $("#custgs").hide();
           // $("#emailreq").hide();
            $("#custgstin").val("");
        } else if (value == '2') {
            $("#custgstin").prop("readonly", true);
            $("#companreq").hide();
            $("#custgs").hide();
          //  $("#emailreq").hide();
            $("#custgstin").val("");
        } else {
            $("#custgstin").prop("readonly", false);
            $("#companreq").show();
            $("#custgs").show();
           // $("#emailreq").show();

        }
    });




    $('#ecomm_status').change(function() {
        var value = $(this).val();
        if (value == '0') {
            $("#ecomm_gstin").prop("readonly", true);
        } else if (value == '1') {
            $("#ecomm_gstin").prop("readonly", false);
        }
    });

    $('.userEditForm').on('submit', function(e) {

        var data = $('.userEditForm').serialize();
        var title = $("#title").val();
        var name = $("#name").val();
        var company = $("#company").val();
        var email = $("#email").val();
        var mobile = $("#mobile").val();
        var pan = $("#pan").val();
        var tan = $("#tan").val();
        var validatemail = validateemail(email);
        var validatepan = $("#panvalid").val();
        var validatetan = $("#tanvalid").val();
        var gstin = $("#custgstin").val();
        var validategstin = $("#gstinvalid").val();
        var ecommgstin = $("#ecomm_gstin").val();
        var validateecomm = $("#ecommvalidate").val();
        var registertype = $("#custreg").val();
        var type = $("#entity").val();
        var ecomm_status = $("#ecomm_status").val();
        var reg_type = $("#reg_type").val();
        console.log(data);
        /* if (title == '') {
             parent.alert({
                 'msg': 'Please select the title',
                 'type': 'danger'
             });
             $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
             return false;
         } else*/
        if (name == '') {
            parent.alert({
                'msg': 'Please enter the name',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
            return false;
        } else if (type == '') {
            parent.alert({
                'msg': 'Please select the type',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
            return false;
        } /*else if (gstin != '' && validategstin == '0') {
            parent.alert({
                'msg': 'Please enter the valid GSTIN',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
            return false;
        }*/ else if (registertype == '1' && gstin == '') {
            parent.alert({
                'msg': 'Please enter the Customer GSTIN',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
            return false;
        } else if (company == '' && registertype == '1') {
            parent.alert({
                'msg': 'Please enter the business name',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
            return false;
        } else if (registertype == '1' && email == '') {
            parent.alert({
                'msg': 'Please enter the Email',
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
        } else if (pan != '' && validatepan == '0') {
            parent.alert({
                'msg': 'Please enter the valid pan number',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_tax"]').trigger('click');
            return false;
        } else if (tan != '' && validatetan == '0') {
            parent.alert({
                'msg': 'Please enter the valid tan number',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_tax"]').trigger('click');
            return false;
        } else if (ecomm_status == '1' && ecommgstin == '') {
            parent.alert({
                'msg': 'Please enter the  E-Commerce GSTIN number',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_tax"]').trigger('click');
            return false;
        } else if (ecommgstin != '' && validateecomm == '0') {
            parent.alert({
                'msg': 'Please enter the valid E-Commerce number',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_tax"]').trigger('click');
            return false;
        } else if (reg_type == '') {
            parent.alert({
                'msg': 'Please select the registration type',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
        } else if (bgstin == 0) {
            parent.alert({
                'msg': 'Please enter valid  GSTIN number1',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_addr"]').trigger('click');
        } else if (sgstin == 0) {
            parent.alert({
                'msg': 'Please enter valid  GSTIN number2',
                'type': 'danger'
            });
            $('.m-tabs-line a[href="#m_portlet_tab_addr"]').trigger('click');
        } else {
            $(".cust_add").attr("disabled", true);
            $.ajax({
                type: "POST",
                url: Ledgers.API + "customer/add-customer",
                dataType: "JSON",
                data: data,
                success: function(result) {
                    $(".cust_add").attr("disabled", false);
                    if (result.status == '1') {
                        parent.alert({
                            'msg': result.msg,
                            'type': 'success'
                        });
                        parent.iframe_close();
                        parent.customer_callback(result);

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



    $('#same_address').change(function() {
        if (this.checked) {
            $("#shipping_address").hide();
            $('#checkbox_addr').val("on");
        } else {
            $("#shipping_address").show();
            $('#checkbox_addr').val("off");
        }
    });


    var closestByClass = function(el, clazz) {
        while (el.className.indexOf(clazz) === -1) {
            el = el.parentNode;
            if (!el) return null;
        }
        return el;
    }



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
                $("#bstate ,#sstate").append('<option value="' + bank_list['state'][i]['state'] + '">' + bank_list['state'][i]['state'] + '</option>');

            }
            for (var i = 0; i < (bank_list['country'].length); i++) {
                $("#bcountry,#scountry").append('<option value="' + bank_list['country'][i]['country'] + '">' + bank_list['country'][i]['country'] + '</option>');
            }

            for (var i = 0; i < (bank_list['paymentmethod'].length); i++) {
                $("#payment_method").append('<option value="' + bank_list['paymentmethod'][i]['value'] + '">' + bank_list['paymentmethod'][i]['value'] + '</option>');
            }
            $('#bstate').val(bank_list.business_state);
            $('#sstate').val(bank_list.business_state);
            $('#bcountry').val(bank_list.business_country);
            $('#scountry').val(bank_list.business_country);
        }
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
$('#scountry').change(function() {
        if (this.value!='INDIA') {
         
         $("#sstatehtml").html('<input type="text" class="form-control" name="sstate" id="sstate">');
         
       }else{
                     
         $("#sstatehtml").html(' <select class="form-control state-list" name="sstate" id="sstate">                                            </select>');
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
               $("#sstate").append('<option value="' + bank_list['state'][i]['state'] + '">' + bank_list['state'][i]['state'] + '</option>');

           }

           $('#sstate').val(bank_list.business_state);
         
       }
   });


       }			
   });

    $("#optionbut").click(function() {
        var optionval = $("#addpayment").val();
        if (optionval == '') {
            $('#m_modal_5').modal('hide');
        } else {
            $.ajax({
                type: "POST",
                url: Ledgers.API + "helper/helper",
                dataType: "JSON",
                data: {
                    'listing': 'addpayment',
                    'paymethod': optionval
                },
                success: function(result) {
                    //alert(result);
                    if (result.status == '1') {
                        $("#payment_method").append('<option value="' + optionval + '">' + optionval + '</option>');
                        $('#payment_method').val(optionval).trigger('change');
                        $('#m_modal_5').modal('hide');
                    }


                }
            });
        }
    });

    $("input[name = 'bpincode']").focusout(function() {
        var pincode = $("input[name = 'bpincode']").val();
        $.ajax({
            type: "POST",
            url: Ledgers.API + "helper/helper",
            dataType: "JSON",
            data: {
                'listing': 'pincode',
                'pincode': pincode
            },
            success: function(result) {
                if (result.status == '1') {
                    $("#bstate").val(result.data[0]['state']);
                    $("input[name = 'bcity']").val(result.data[0]['district']);
                    $("#bcountry").val(result.data[0]['country']);
                } else {
                    $("input[name = 'bcity']").val("");

                }
            }
        });
    });

    $("input[name = 'spincode']").focusout(function() {
        var pincode = $("input[name = 'spincode']").val();
        $.ajax({
            type: "POST",
            url: Ledgers.API + "helper/helper",
            dataType: "JSON",
            data: {
                'listing': 'pincode',
                'pincode': pincode
            },
            success: function(result) {
                if (result.status == '1') {
                    $("#sstate").val(result.data[0]['state']);
                    $("input[name = 'scity']").val(result.data[0]['district']);
                    $("#scountry").val(result.data[0]['country']);
                } else {
                    $("input[name = 'scity']").val("");

                }
            }
        });
    });
    $("input[name = 'gstin']").focusout(function() {

        
        var gstin = $.trim($("#custgstin").val());
        var state_id=gstin.substring(0, 2);
        if (gstin == '') {
               $('#company').val('').trigger('change');
            $('#company_dy').val("");
            $("#gst_status").val("0");
            $("#companreq").hide();   
            $("#replace_gstin").val("");
            
            $("#gstinvalid").val("");
             $('#bstate').val("TAMIL NADU");
            $('#sstate').val("TAMIL NADU");
            $(".gstin_exists").hide();

            
        } else {

               $.ajax({
                        type: "POST",
                        url: Ledgers.API +"customer/list-customer",
                        data: {'gstin': gstin,'operation':'gstin_duplicate','contact_type':'add'},
                        async:false,
                        dataType : "JSON",
                        success: function(result)
                      {
                            if(result.status==1){
                                $(".gstin_exists").hide();

            $.ajax({
                type: "GET",
                url: Ledgers.API +"customer/list-customer?operation=gstin_search&gstin=" + gstin,
                dataType: "JSON",
                success: function(res) {

                    if (res['status'] == 1) {
                         var stcode=gstin.substring(0,2);
                        if(statearray!=''){
                           for (var i = 0; i < (statearray.length); i++) {
                                if( statearray[i]['code']==stcode){
                                      $('#bstate').val(statearray[i]['state']);
                                      $('#sstate').val(statearray[i]['state']);
                                }                                 
                            }
                        }

                        $("#gstinvalid").val("1");
                        $("#gst_status").val("1");
                        $("#companreq").show();
                        $("#custgs").show();
                       // $("#emailreq").show();
                        if(res.data.lgnm!=''){
                           var cmpname=res.data.lgnm;
                           $("#replace_gstin").val(cmpname);
                           $("#company").append('<option selected="selected" value="' + cmpname + '">' + cmpname + '</option>');
                           $("#company_dy").val(cmpname);

                        }
                        $("#pan").val(gstin.slice(2,-3));
                        

                         

                        parent.alert({
                         'msg': 'Valid GSTIN',
                         'type': 'success'
                        });
                        $('.m-tabs-line a[href="#m_portlet_tab_info"]').trigger('click');
                    } else {
                      //  console.log("Sdfgsdfg")
                        $("#gstinvalid").val("0");
                        $("#gst_status").val("0");
                        $("#companreq").hide();
                        $("#custgs").hide();
                       // $("#emailreq").hide();
                        $("#replace_gstin").val("");
                        $("#company_dy").val("");
                        $("#custgstin").val("");
                        $("#pan").val("");

                        parent.alert({
                            'msg': 'Please enter the valid GSTIN',
                            'type': 'danger'
                        });
                        return false;
                    }



                }
            });
                            }else{
                                $(".gstin_exists").show();
                            }
                      }
                 });





        }
    });

    $("input[name = 'ecomm_gstin']").focusout(function() {
        var egstin = $("#ecomm_gstin").val();
        if (egstin == '') {
            $("#ecommvalidate").val("");
        } else {
            $.ajax({
                type: "GET",
                url: Ledgers.API +"customer/list-customer?operation=gstin_search&gstin=" + egstin,
                dataType: "JSON",
                success: function(res) {

                    if (res['status'] == 1) {
                        $("#ecommvalidate").val("1");
                    } else {
                        $("#ecommvalidate").val("0");
                        parent.alert({
                            'msg': 'Please enter the valid GSTIN',
                            'type': 'danger'
                        });
                        return false;
                    }

                }
            });
        }
    });

    $("input[name = 'bgstin']").focusout(function() {
        var gstin = $("#bgstin").val();
        if (gstin != '') {
            $.ajax({
                type: "GET",
                url: Ledgers.API +"customer/list-customer?operation=gstin_search&gstin=" + gstin,
                dataType: "JSON",
                success: function(res) {
                    if (res['status'] == 1) {
                        bgstin = 1;
                    } else {
                        bgstin = 0;
                        parent.alert({
                            'msg': 'Please enter the valid GSTIN',
                            'type': 'danger'
                        });
                        return false;
                    }

                }
            });

        }
    });

    $("input[name = 'sgstin']").focusout(function() {
        var gstin = $("#sgstin").val();
        if (gstin != '') {
            $.ajax({
                type: "GET",
                url: Ledgers.API +"customer/list-customer?operation=gstin_search&gstin=" + gstin,
                dataType: "JSON",
                success: function(res) {
                    if (res['status'] == 1) {
                        sgstin = 1;
                    } else {
                        sgstin = 0;
                        parent.alert({
                            'msg': 'Please enter the valid GSTIN',
                            'type': 'danger'
                        });
                        return false;
                    }

                }
            });
        }
    });


    var search_text;
    var business_data;
    $("#company").select2({
        placeholder: "Search for company",
        // allowClear: 1,
        ajax: {
            url: Ledgers.API + "invoice/invoice-helper-service-api",
            dataType: "json",
            type: "POST",
            delay: 250,
            data: function(e) {
                search_text = e.term;
                return {
                    company_name: e.term,
                    page: e.page,
                    token: 'session',
                    operation: 'company_search'
                }
            },
            processResults: function(e, t) {
                business_data = e;
                return t.page = t.page || 1, {
                    results: e.company,
                    pagination: {
                        more: 30 * t.page < e.total_count
                    }
                }
            },
            cache: !0
        },
        escapeMarkup: function(e) {
            return e
        },
        language: {
            noResults: function(params) {
                console.log(search_text);
                // return '<a href=# class="add_cust_btn">Add '+search_text+'</a>';
                $("#company").append('<option selected="selected" value="' + search_text + '">' + search_text + '</option>');
                $("#company_dy").val(search_text);

            }
        },
        minimumInputLength: 1,
        /*templateResult: function(e) {
            if (e.loading) return e.text;
            var t = "<div class='select2-result-repository clearfix'><div class='select2-result-repository__meta'><div class='select2-result-repository__title'>" + e.full_name + "</div>";
            return e.description && (t += "<div class='select2-result-repository__description'>" + e.description + "</div>"), t += "<div class='select2-result-repository__statistics'><div class='select2-result-repository__forks'><i class='fa fa-flash'></i> " + e.forks_count + " Forks</div><div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> " + e.stargazers_count + " Stars</div><div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> " + e.watchers_count + " Watchers</div></div></div></div>"
        },
        templateSelection: function(e) {
            return e.full_name || e.text
        }*/
    });

    var email_data;
    var email_text;
    $("#google_email").select2({
        placeholder: "Search for email",
        // allowClear: 1,
        ajax: {
            url: Ledgers.API + "invoice/invoice-helper-service-api",
            dataType: "json",
            type: "POST",
            delay: 250,
            data: function(e) {
                email_text = e.term;
                return {
                    email: e.term,
                    page: e.page,
                    token: 'session',
                    operation: 'email_search'
                }
            },
            processResults: function(e, t) {
                
                email_data = e;
                return t.page = t.page || 1, {
                    results: e.email,                    
                    pagination: {
                        more: 30 * t.page < e.total_count
                    }
                }
            },
            cache: !0
        },
        escapeMarkup: function(e) {
            return e
        },
        language: {
            noResults: function(params) {
                console.log(email_text);
                
                $("#google_email").append('<option selected="selected" value="' + email_text + '">' + email_text + '</option>');
                $("#email").val(email_text);

            }
        },
        minimumInputLength: 1,
        /*templateResult: function(e) {
            if (e.loading) return e.text;
            var t = "<div class='select2-result-repository clearfix'><div class='select2-result-repository__meta'><div class='select2-result-repository__title'>" + e.full_name + "</div>";
            return e.description && (t += "<div class='select2-result-repository__description'>" + e.description + "</div>"), t += "<div class='select2-result-repository__statistics'><div class='select2-result-repository__forks'><i class='fa fa-flash'></i> " + e.forks_count + " Forks</div><div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> " + e.stargazers_count + " Stars</div><div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> " + e.watchers_count + " Watchers</div></div></div></div>"
        },*/
        templateSelection: function(e) {
            $("#email").val(e.text);
            return e.text || e.text
            
        }
    });

 

    $("#company").change(function() {
        var value = $(this).val();
      //  console.log(business_data['company']+'sdafsdf')
        if(business_data['company']!=''){
              for (var i = 0; i < business_data['company'].length; i++) {
           
            if (business_data['company'][i]['id'] == value) {
                $("#company_dy").val(business_data['company'][i]['text']);
                $("#custgstin").val('');
                $("#replace_gstin").val('');
                //  $("input[name = 'baddr1']").val(business_data['company'][i]['addr_line1']);
                //  $("input[name = 'baddr2']").val(business_data['company'][i]['addr_line2']);
                //  $("input[name = 'bcity']").val(business_data['company'][i]['city']);
                $("input[name = 'bpincode']").val(business_data['company'][i]['pincode']);
                // $("select[name = 'bstate']").val(business_data['company'][i]['state']);
                // $("select[name = 'bcountry']").val(business_data['company'][i]['country']);
                break;
            }

        }
        }
      


    });

    $.ajax({
        type: "POST",
        url: Ledgers.API + "helper/helper",
        dataType: "JSON",
        data: {
            'listing': 'bank_list'
        },
        success: function(bank_list) {
            let sel='';
            if (bank_list.status == '1') {
                for (var i = 0; i < (bank_list['bank'].length); i++) {
                    console.log(111);
                    console.log(cbank_name);
                    if(bank_list['bank'][i]['bank']==cbank_name)
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
            url: Ledgers.API + "helper/helper",
            dataType: "JSON",
            data: {
                'listing': 'branch_list',
                'bank_name': bank_name
            },
            success: function(branch_list) {
                if (branch_list.status == '1') {
                    $("#branch_name").empty();
                    for (var i = 0; i < (branch_list.branch.length); i++) {
                        $("#branch_name").append('<option value="' + branch_list.branch[i]['branch'] + '">' + branch_list.branch[i]['branch'] + '</option>');

                    }
                }

            }
        });
    });

    $('#branch_name').change(function() {
        var branch_name = $(this).val();
        var bank_name = $("#bank_name").val();
        $.ajax({
            type: "POST",
            url: Ledgers.API + "helper/helper",
            dataType: "JSON",
            data: {
                'listing': 'branch_detail',
                'branch_name': branch_name,
                'bank_name':bank_name
            },
            success: function(branch_list) {
                if (branch_list.status == '1') {
                    $("#bank_city").val(branch_list.branch_detail[0].city);
                    $("#ifsc_code").val(branch_list.branch_detail[0].ifsc);
                }
            }
        });
    });

      var id= getUrlVars()['id'];
            if(id!=undefined){
                    $.ajax({
                    type: "POST",
                    url: Ledgers.API +"customer/get-import-customer",
                    data: {'id': id},
                    async:false,
                    dataType : "JSON",
                    success: function(result)
                    {
                            if(result.status==1){
                                if(result.temp_customer[0].name!=''){
                                var namevals=$.trim(result.temp_customer[0].name);

                                $("#name").val(namevals);
                            }
                            if(result.temp_customer[0].email!=''){
                                var emailvals=$.trim(result.temp_customer[0].email);
                               // console.log(emailvals)
                                $("#email").val(emailvals);
                                $("#email").prop("readonly", true);
                            }

                            if(result.temp_customer[0].phone!=''){
                                $("#phone").val(result.temp_customer[0].phone);
                            }  if(result.temp_customer[0].mobile!=''){
                                $("#mobile").val(result.temp_customer[0].mobile);
                            } if(result.temp_customer[0].gstin!=''){
                                $("#custgstin").val(result.temp_customer[0].gstin);
                                $("input[name = 'gstin']").trigger("focusout");
                            } if(result.temp_customer[0].salutation!=''){
                                console.log(result.temp_customer[0].salutation)
                                $("#title").val(result.temp_customer[0].salutation+'.');
                            }if(result.temp_customer[0].baddr1!=''){
                                $("#baddr1").val(result.temp_customer[0].baddr1);
                            }if(result.temp_customer[0].baddr2!=''){
                                $("#baddr2").val(result.temp_customer[0].baddr2);
                            }if(result.temp_customer[0].bcity!=''){
                                $("#bcity").val(result.temp_customer[0].bcity);
                            }if(result.temp_customer[0].bpincode!=''){
                                $("#bpincode").val(result.temp_customer[0].bpincode);
                            }if(result.temp_customer[0].bstate!=''){
                                $("#bstate").val(result.temp_customer[0].bstate);
                            }if(result.temp_customer[0].bcountry!=''){
                                $("#bcountry").val(result.temp_customer[0].bcountry);
                            }


                            if(result.temp_customer[0].saddr1!=''){
                                $("#saddr1").val(result.temp_customer[0].saddr1);
                            }if(result.temp_customer[0].saddr2!=''){
                                $("#saddr2").val(result.temp_customer[0].saddr2);
                            }if(result.temp_customer[0].scity!=''){
                                $("#scity").val(result.temp_customer[0].scity);
                            }if(result.temp_customer[0].spincode!=''){
                                $("#spincode").val(result.temp_customer[0].spincode);
                            }if(result.temp_customer[0].sstate!=''){
                                $("#sstate").val(result.temp_customer[0].sstate);
                            }if(result.temp_customer[0].scountry!=''){
                                $("#scountry").val(result.temp_customer[0].scountry);
                            }if(result.temp_customer[0].ifsccode!=''){
                                $("#ifsc_code").val(result.temp_customer[0].ifsccode);
                            }if(result.temp_customer[0].bankname!=''){
                                var bbname=result.temp_customer[0].bankname.toUpperCase();
                                $("#bank_name").val(bbname);
                            }if(result.temp_customer[0].pan!=''){
                                $("#pan").val(result.temp_customer[0].pan);
                            }if(result.temp_customer[0].tan!=''){
                                $("#tan").val(result.temp_customer[0].tan);
                            }



                            //custgstin
                                $("#import_val").val(result.temp_customer[0].id);

                                $("#account_type").val(result.temp_customer[0].account_type);
                               // $("#baddr1").val(result.temp_customer[0].baddr1);
                              //  $("#baddr2").val(result.temp_customer[0].baddr2);
                                $("#bank_acc_name").val(result.temp_customer[0].bankholder);
                                $("#bank_city").val(result.temp_customer[0].bank_city);
                                $("#bank_acc_no").val(result.temp_customer[0].bank_accno);
                                //$("#branch_name").val(result.temp_customer[0].bank_branch);
                            }

                       }
                     });


                   $.ajax({
                    type: "POST",
                    url: Ledgers.API +"customer/get-import-payment",
                    data: {'id': id},
                    async:false,
                    dataType : "JSON",
                    success: function(result)
                    {
                          if(result.status==1){
                                if(result.pay_customer[0].name!=''){
                                var namevals=$.trim(result.pay_customer[0].name);

                                $("#name").val(namevals);
                            }
                            if(result.pay_customer[0].email!=''){
                                var emailvals=$.trim(result.pay_customer[0].email);
                                $("#email").val(emailvals);
                                $("#email").prop("readonly", true);
                            }
                                $("#import_pay_val").val(result.pay_customer[0].id);
                            }

                       }
                     });
           }


        //Email Duplicate check 
        $("input[name = 'email']").focusout(function() {
            var email_check =$.trim($("#email").val());
            if(email_check !=''){
                 $.ajax({
                        type: "POST",
                        url: Ledgers.API +"customer/list-customer",
                        data: {'email': email_check,'operation':'email_duplicate','contact_type':'add'},
                        async:false,
                        dataType : "JSON",
                        success: function(result)
                      {
                            if(result.status==1){
                                $(".email_exists").hide();
                            }else{
                                $(".email_exists").show();
                            }
                      }
                 });

            }else{
                   $(".email_exists").hide();

            }
        });

    //Mobile Duplicate Check
     $("#mobile").focusout(function() {
            var mobile_check =$.trim($("#mobile").val());
            if(mobile_check !=''){
                 $.ajax({
                        type: "POST",
                        url: Ledgers.API +"customer/list-customer",
                        data: {'mobile': mobile_check,'operation':'mobile_duplicate','contact_type':'add'},
                        async:false,
                        dataType : "JSON",
                        success: function(result)
                      {
                            if(result.status==1){
                                $(".mobile_exists").hide();
                            }else{
                                $(".mobile_exists").show();
                            }
                      }
                 });

            }else{
                 $(".mobile_exists").hide();

            }
        });


});



function displayname() {
    var name = $("#name").val();
    $("#display_name").val(name);
    $("#bank_acc_name").val(name);
}

function displayemail() {
    var email = $("#email").val();
    if (email != '') {
        var mailvalidate = validateemail(email);
        if (mailvalidate) {
            $("#userid").val(email);
            $("#custportal").show();
        } else {
            $("#userid").val("");
            $("#custportal").hide();
        }
    } else {
        $("#userid").val("");
        $("#custportal").hide();
    }


}

function validatepan() {
    var pan = $("#pan").val();
    // if(pan.length>=10)
    // {
    //     $.ajax({
    //         type: "POST", url: "/m/api/business/track-event", dataType: "JSON", async: false,data: { 'pan': pan, 'operation': 'pan_check_query'},
    //         success: function(data) {
    //             if (data['status'] == 1) {
    //                 if(data['data']['applicant_surname'] && data['data']['applicant_surname']!=""){
    //                     if(data['data']['applicant_midname'] && data['data']['applicant_midname']!="") data['data']['applicant_surname'] = data['data']['applicant_midname']+" "+data['data']['applicant_surname'];
    //                     if(data['data']['applicant_first_name'] && data['data']['applicant_first_name']!="") data['data']['applicant_surname'] = data['data']['applicant_first_name']+" "+data['data']['applicant_surname'];
    //                 }
    //                 console.log(data['data']['applicant_surname']);
    //                 $('#name').val(data['data']['applicant_surname']);
                    
    //             } else {
                
    //                // $("#pan").val('');
    //                // parent.alert({ 'type': 'danger', 'msg': data['message'] });
    //             }	
    //             return data;
    //         }
    //     });
    // }
  
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

function validatetan() {
    var tan = $("#tan").val();
    var regtan = /^([a-zA-Z]){4}([0-9]){5}([a-zA-Z]){1}?$/;
    if (tan == '') {
        $("#tanvalid").val("");
    } else {
        if (regtan.test(tan)) {
            $("#tanvalid").val("1");

        } else {
            $("#tanvalid").val("0");

        }
    }



}

/*function validateemail(email) {
    var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    var valid = emailReg.test(email);
    if (!valid) {
       return false;
    } else {
        return true;
    }
}*/

function    validateemail(email){
    var emailids=$.trim(email);
    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var res= re.test(String(emailids).toLowerCase());
   // console.log(res)
   return res;
}
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
