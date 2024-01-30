$(document).ready(function(){
	$(document).on('click', '#submitContactUsForm', function(e) {
        e.preventDefault();
        var formId = $('form.contactForm').attr('id');
        var validateFormResponse = validateForm(formId);
        if(!validateFormResponse){
            //$("html, body").animate({ scrollTop: 0 }, "fast");
            return false;

        }else{
            $('body').css('opacity','0.2');
            var url = $('form.contactForm').attr('action');
            //var data = $('form.createTeam').serialize()
            var data = new FormData(document.getElementById('contact-form'));
            simpleAjax(url, data, 'createContactUsCallBack', 'post','json','');
        }
    });

    $(document).on('click', '#submitPortfolioButton', function(e) {
        var formId = $('form.addPortfolioForm').attr('id');
        var validateFormResponse = validateForm(formId);
        if(!validateFormResponse){
            $("html, body").animate({ scrollTop: 0 }, "fast");
            return false;

        }else{
            $('body').css('opacity','0.2');
            var url = $('form.addPortfolioForm').attr('action');
            //var data = $('form.createTeam').serialize()
            var data = new FormData(document.getElementById('addPortfolioForm'));
            simpleAjax(url, data, 'createPortfolioFormCallBack', 'post','json','');
        }
    });


    $(document).on('change','#changeType',function(e){        
        //alert($(this).val())
        if ($(this).val()==='photo') {
            $('.phptoDiv').css('display','flex');
            $('.videoDiv').css('display','none');
            $('#addVideo').removeClass('required');
            $('#addVideo').val('');
            $('#addPhotos').addClass('required');
        } else {
            $('.phptoDiv').css('display','none');
            $('.videoDiv').css('display','flex');
            $('#addPhotos').removeClass('required');
            $('#addVideo').addClass('required');
            $('#addPhotos').val('');
        }
    })



    $(document).on('click', '#addProduct', function(e) {
        e.preventDefault();
        var formId = $('form.addProductForm').attr('id');
        var validateFormResponse = validateForm(formId);
        if(!validateFormResponse){
            $("html, body").animate({ scrollTop: 0 }, "fast");
            return false;

        }else{
            $('body').css('opacity','0.2');
            var url = $('form.addProductForm').attr('action');
            //var data = $('form.createTeam').serialize()
           /*var editor_content = quill.container.innerHTML;
           $("#hiddenArea").val(editor_content);*/
            var data = new FormData(document.getElementById('addProductForm'));
            simpleAjax(url, data, 'createAddProductCall', 'post','json','');
        }
    });


    $(document).on('click', '#addCategory', function(e) {
        e.preventDefault();
        var formId = $('form.addCategoryForm').attr('id');
        var validateFormResponse = validateForm(formId);
        if(!validateFormResponse){
            $("html, body").animate({ scrollTop: 0 }, "fast");
            return false;

        }else{
            $('body').css('opacity','0.2');
            var url = $('form.addCategoryForm').attr('action');
            //var data = $('form.createTeam').serialize()
            var data = new FormData(document.getElementById('addCategoryForm'));
            simpleAjax(url, data, 'createAddCategory', 'post','json','');
        }
    });

    /*$(document).on('click', '#deleteAssessment', function(e) {
        if (confirm("Are you sure to delete this record?")) {            
            var url = site_url+'/delete/record';
            var data ={}
            data['id'] = $(this).attr('row-id');
            console.log($(this).attr('row-id'))
            console.log(data);
            simpleAjax(url, data, 'deleteRecord', 'post','json','');
            //alert(url);
        }
    });*/


});

function deleteRecord(response,self) {
    $('body').css('opacity','1');
    if (response['status'] && response['status']=='success') {
        $('#addProductForm')[0].reset();
        alert('Data has been uploaded successfully')
        window.location.reload();
    } else {
        alert('Something went wrong');
    }
}


 $(document).on('click', '#deleteAssessment', function(e) {
        if (confirm("Are you sure to delete this record?")) {
            var data = {};
        data['id'] = $(this).attr('row-id');
        data['modelName'] = $(this).attr('modelName');
        data['delete-rowId'] = $(this).attr('delete-rowId');
        var url = site_url+'/delete/record';
        $('body').css('opacity','0.2');
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: data,
        beforeSend: function(xhr) {
            xhrPool.push(xhr);
            xhr.setRequestHeader('X-CSRF-Token', $('input[name="_token"]').val());
        },
        success: function(data) {
            $('body').css('opacity','1');
            //callback(data);
           console.log(data);
           alert(data['msg']);
            window.location.reload();

        },
        error: function(error){
            $('body').css('opacity','1');
            if(error.status === 422 ){
                var err = error.responseJSON;
                $.each(err.errors, function (i, v) {
                    $('input[name='+i+']').after('<p class="field-error">'+v+'</p>');
                });
                $("html, body").animate({ scrollTop: 0 }, "fast");
            }
        }
    });



        }
    });




function createAddProductCall(response,self) {
    console.log(response);
    $('body').css('opacity','1');
    if (response['status'] && response['status']=='success') {
        $('#addProductForm')[0].reset();
        alert('Data has been uploaded successfully')
        window.location.reload();
    } else {
        alert('Something went wrong');
    }
}

function createAddCategory(response,self) {
    console.log(response);
    $('body').css('opacity','1');
    if (response['status'] && response['status']=='success') {
        $('#addCategoryForm')[0].reset();
        alert('Data has been uploaded successfully')
        window.location.reload();
    } else {
        alert('Something went wrong');
    }
}

function createContactUsCallBack(response,self) {
    console.log(response);
    $('body').css('opacity','1');
    if (response['status'] && response['status']=='success') {
        alert('Thanks for contact us. We will get back to you soon.');
        $('#contact-form')[0].reset();
        window.location.reload();
    } else {
        alert('Something went wrong');
    }
}

function createPortfolioFormCallBack(response,self) {
    console.log(response);
    if (response['status'] && response['status']=='success') {
        alert(response.msg)
        window.location.reload();
    } else {
        alert('Something went wrong');
    }
}