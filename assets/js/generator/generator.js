$(document).ready(function() {
    // Compt field
    comptField = 1;
    // Add field to config form
    $('#add li span').click(function(){
        // Get informations
        type = $(this).attr('value');
        html = $('#config_'+type).html();
        
        // Change field and label name
        reg=new RegExp("(myfieldname)", "g");
        html = html.replace(reg, 'myfieldname'+comptField);
        reg=new RegExp("(myfieldlabel)", "g");
        html = html.replace(reg, 'myfieldlabel'+comptField);
        // Add div
        $('#config').prepend('<div class="config_'+type+' portlet">'+html+'</div>');
        
        // Active sortable
        sortable();
        
        // Active tabs
        $( "#config div:eq(0) .tab" ).tabs(); 
        
        // Compt increment
        comptField++;
    });
    
    // Delete field
    $('.delete_field').live('click', function(){
        $(this).parent().parent().remove(); 
    });
    
    // Show settings box 
    $('.settingBtn').colorbox({
        inline:true, 
        width:'50%',
        height : '350px',
        escKey: false,
        overlayClose: false,
        closeButton:false
    });
    $('#cboxClose').css('display', 'none');
    
    // Check settings
    $('.saveSettings').click(function(){
        // Init
        settingsError = 0;
        // Remove errors
        $('#settings .error').remove();
        
        // Check form name
        str = String($('#formName').val());
        reg = new RegExp("^\s*([0-9a-zA-Z\-\_]{3,40})\s*$");
        if(reg.test(str) == false && $('#formName').val() != 'generator') {
            $('#formName').parent().after('<p class="error">Form name can\'t be empty, can\'t called "generator" & can\'t contain spaces or special character (min : 3 char, max 40 chars)</p>');
            settingsError = 1;
        } 
        // Check css file name
        str = String($('#cssName').val());
        reg = new RegExp("^\s*([0-9a-zA-Z\-\_]{3,40})\s*$");
        if(reg.test(str) == false) {
            $('#cssName').parent().after('<p class="error">Css file name can\'t be empty & can\'t contain spaces or special character (min : 3 char, max 40 chars)</p>');
            settingsError = 1;
        } 
        
        if(settingsError == 1) {
            return false;
        } else {
            $('.settingBtn').colorbox.close();
        }
    });
    
    // Show or hide database options
    $('.add_database').live('click', function(){
        // Parent ref
        _oldparent = $(this).parent().parent();
        // If checked
        if($(this).is(':checked') == true) {
            $('.database_infos', _oldparent).css('visibility', 'visible');
        } else {
            $('.database_infos', _oldparent).css('visibility', 'hidden');
        }
    });
                    
                    
    // Show or hide code sections
    $('#code h3').each(function(){
        $(this).click(function(){
            currentDiv = $('#code div:eq('+($(this).index()/2)+')');
            $.colorbox({
                html:currentDiv.html(), 
                height : '70%'
            });
        });
    });
                
    // Sortable
    function sortable() {
        // Unbind click on edit icon
        $( ".portlet-header .edit_field" ).unbind('click');
                   
        // Sortable info            
        $( ".column" ).sortable({
            connectWith: ".column"
        });
        // Create event on edit icon to show edit box
        $( ".portlet-header .edit_field" ).click(function() { 
            $( this ).parents( ".portlet:first" ).find( ".portlet-content" ).toggle();
        });
    }
                
                    
    // Add option for selects    
    $('.addOption').live('click', function(){
        _parent = $(this).parent();
        html = $('p:eq(1)', _parent).html();
                    
        // Add html option
        $('p:last', _parent).after('<p class="option">'+html+'</p>');
                    
        return false;
    });
    
    // Delete option
    $('.deleteOption').live('click', function(){
        _parent = $(this).parent().parent();
        // If the first option already exists
        if($('.option', _parent).length > 1) {
            $(this).parent().remove();
        }
        
        return false;
    });
                
                
    // Valid field
    $('.valid_field, .create_files, .create_db').click(function(){
        // Init
        error = 0;
        $('#errors').html('');
        tabFieldName = new Array;
                    
        $('#config > div').each(function(){
            // Init
        errorDiv = 0;
            // Referent
            _parent = $('.portlet-content', this);
            _grandParent = $(_parent).parent();
            
            // remove all errors
            $('.error', _parent).remove();
                    
            type = $(_parent).attr('type');
            
            // Fieldname can\'t be empty & can\'t contain spaces or special character (min : 3 char, max 40 chars)
            textName = $('.'+type+'_name', _parent);
            str = String(textName.val());
            reg = new RegExp("^\s*([0-9a-zA-Z\-\_]{3,40})\s*$");
            if(reg.test(str) == false) {
                textName.after('<p class="error">Can\'t be empty & can\'t contain spaces or special character (min : 3 char, max 40 chars)</p>');
                errorDiv = error = 1;
            }
            
            // Add field to tab name
            if($.inArray(textName.val(), tabFieldName) == -1) {
                tabFieldName.push(textName.val());
            } else {
                textName.after('<p class="error">Your field name already exists !</p>');
                errorDiv = error = 1;
            }
            
            // Field label can\'t be empty (min : 3 char, max 40 chars) 
            textName = $('.'+type+'_label', _parent);
            str = String(textName.val());
            if(type != 'hidden' && type != 'reset' && type != 'submit') {
                reg = new RegExp("^\s*([0-9a-zA-Z\-\_\'\ ]{3,40})\s*$");
                if(reg.test(str) == false) {
                    textName.after('<p class="error">Can\'t be empty (min : 3 char, max 40 chars)</p>');
                    errorDiv = error = 1;
                } else {
                    $('.title_label', this).html(str);
                }
            } else {
                $('.title_label', this).html(str);
            }
            
            // Reset and Submit can\'t be empty (min : 3 char, max 40 chars)
            if(type == 'reset' || type == 'submit') {
                textName = $('.'+type+'_value', _parent);
                str = String(textName.val());
                reg = new RegExp("^\s*([0-9a-zA-Z\-\_\'\ ]{3,40})\s*$");
                if(reg.test(str) == false) {
                    textName.after('<p class="error">Can\'t be empty (min : 3 char, max 40 chars)</p>');
                    errorDiv = error = 1;
                } 
            }
            
            // Check options for select, checkbox and radio
            if(type == 'select' || type == 'checkbox' || type == 'radio') {
                // Options can\'t be empty & can\'t contain spaces or special character (min : 1 char, max 40 chars)
                $('.select_option', _parent).each(function(){
                    textName = $(this);
                    myParent = $(this).parent();
                    str = String(textName.val());
                    reg = new RegExp("^\s*([0-9a-zA-Z\-\_]{1,40})\s*$");
                    if(reg.test(str) == false) {
                        $(':last', myParent).after('<p class="error">Can\'t be empty & can\'t contain spaces or special character (min : 1 char, max 40 chars)</p>');
                        errorDiv = error = 1;
                    } 
                });
            }
                            
            // Specific rules must be numeric
            infosLevel3 = $('div:eq(1) > div:eq(0) > div:eq(2)', this);
            reg = new RegExp("^[0-9]*$");
            $('input', infosLevel3).each(function(){
                rule = $(this, _parent);
                str = String(rule.val());
                if(reg.test(str) == false) {
                    rule.after('<p class="error">Must be numeric</p>');
                    errorDiv = error = 1;
                }
            });
                                
            // Sql can't be empty and must be numeric
            if($('.add_database', this).is(':checked') == true) {
                reg = new RegExp("^[0-9]+$");
                rule = $('.database_length', _parent);
                str = String(rule.val());
                if(reg.test(str) == false) {
                    rule.after('<p class="error">Can\'t be empty & must be numeric</p>');
                    errorDiv = error = 1;
                }
            }
            
            if(errorDiv == 1) {
                // color borders
                _grandParent.css('border-color', 'red');
            }
                        
        });
                        
        // Create code
        if(error == 0) {
            // Hide errors
            $('#errors').hide();
            // Show code
            $('#code').show();
            // Build codes
            if($(this).hasClass('valid_field')) {
                build();
            }
            // Create files
            if($(this).hasClass('create_files')) {
                build();
                create_files();
            }
            // Create Database
            if($(this).hasClass('create_db')) {
                build();
                create_db();
            }
        } else {
            // Show errors principal div
            $('#errors').show();
            $('#errors').html('<p class="error">Configuration error, please check fields !</p>');
            // Hide code selection
            $('#code').hide();
        }
    });
                    
    // Create object for builder
    function analyseFields() {
        formDatas = {};
        i = 0;
        $('#config > div').each(function(){
            type = $('.portlet-content', this).attr('type');
            formDatas[i] = {};
            
            
            /**
             * DIV 1 > Informations
             */
            // Add var for field type
            formDatas[i].type = type;
            // Add var for field name
            formDatas[i].name = $('.'+type+'_name', this).val();
            // Add var for field label
            formDatas[i].label = $('.'+type+'_label', this).val();
            // Add var for field value if exists
            if($('.'+type+'_value', this) != undefined) {
                formDatas[i].value = $('.'+type+'_value', this).val();
            }
            
            // Select
            if(type == 'select' || type == 'checkbox' || type == 'radio') {
                
                // Init action
                switch(type) {
                    case 'select' :
                        title_select = $('.portlet-header select', this);
                        // Clear content
                        title_select.html('');
                        // Create new array JS
                        formDatas[i].options = new Array;
                        break;
                    case 'checkbox' :
                        title_select = $('.portlet-header .title_checkbox', this);
                        // Clear content
                        title_select.html('');
                        // Create new array JS
                        formDatas[i].checkbox = new Array;
                        break;
                    case 'radio' :
                        title_select = $('.portlet-header .title_radio', this);
                        // Clear content
                        title_select.html('');
                        // Create new array JS
                        formDatas[i].radio = new Array;
                        break;
                }
                
                // Action element by element
                $('.select_option', $(this)).each(function(){
                    switch(type) {
                        case 'select' :
                            // Create options to HTML view
                            title_select.append('<option>'+$(this).val()+'</option>');
                            // Create options for JS array
                            formDatas[i].options.push($(this).val());
                            break;
                        case 'checkbox' :
                            // Create options to HTML view
                            title_select.append('<input type="checkbox" /> <span class="title_value">'+$(this).val()+'</span> ');
                            // Create options for JS array
                            formDatas[i].checkbox.push($(this).val());
                            break;
                        case 'radio' :
                            // Create options to HTML view
                            title_select.append('<input type="radio" /> <span class="title_value">'+$(this).val()+'</span> ');
                            // Create options for JS array
                            formDatas[i].radio.push($(this).val());
                            break;
                    }
                    
                });
            }
                            
            // File
            if(type == 'file') {
                // Stringify tab of fileformat
                if($('.file_format', $(this)).val() != null) {
                    formDatas[i].file_format = JSON.stringify($('.file_format', $(this)).val());
                }
                // Add filesize
                if($('.maxfilesize', $(this)).val() != null) {
                    formDatas[i].maxfilesize = $('.maxfilesize', $(this)).val();
                }
            }
            
            /**
             * DIV 2 > SQL
             */
            if($('.add_database', this).is(':checked') == true) {
                infosLevel2 = $('.database_infos', this);
                // Add var database_field
                formDatas[i].database_fields = $('.database_fields', infosLevel2).val();
                // Add var database_length
                formDatas[i].database_length = $('.database_length', infosLevel2).val();
            }
                            
            
            /**
             * DIV 3 > Rules
             */
            // Stringify tab of classic rules
            if($('.rules', this).val() != null) {
                formDatas[i].rules = JSON.stringify($('.rules', this).val());
            }
            // Create var for all special rule
            formDatas[i].matches = $('.matches', this).val();
            formDatas[i].min_length = $('.min_length', this).val();
            formDatas[i].max_length = $('.max_length', this).val();
            formDatas[i].exact_length = $('.exact_length', this).val();
            formDatas[i].greater_than = $('.greater_than', this).val();
            formDatas[i].less_than = $('.less_than', this).val();
                            
            
            i++; 
        });
                        
        // Encode in json
        return JSON.stringify(formDatas);
    }
                    
    // Create controller
    function build() {
        formDatas = analyseFields();
        formName = $('#formName').val();
        cssName = $('#cssName').val();
                        
        // Call the ajax builder
        $.ajax({  
            url: $('#base_url').val()+"generator/builder",  
            dataType: 'json',  
            data: {
                'formName' : formName,
                'cssName' : cssName,
                'formDatas' : formDatas
            },
            type: 'post', 
            success: function(data){  
                // Write the code
                $('#controller pre code').html(data.controller);
                $('#model pre code').html(data.model);
                $('#view pre code').html(data.view);
                $('#sql pre code').html(data.sql);
                                
                $('#live').html(data.htmlview);
            }  
        }); 
                        
        // Updated text
        $('#code h3 span').each(function(){
            $('.updated').addClass('valid');
            $('.updated').html('Updated !');
            // Hide updated text
            setTimeout(function clearUpdated() {
                $('.updated').html('');
            }, 1000);
        });
                        
    }
    
    // Create files in CI project
    function create_files() {
        // Get fields infos
        formDatas = analyseFields();
        formName = $('#formName').val();
        cssName = $('#cssName').val();
                        
        // Call the ajax builder
        $.ajax({  
            url: $('#base_url').val()+"generator/creator",  
            dataType: 'json',  
            data: {
                'formName' : formName,
                'cssName' : cssName,
                'formDatas' : formDatas
            },
            type: 'post', 
            success: function(data){  
                $('#errors').show();
                // Create a link to see form in action
                $('#errors').html('<a href="'+$('#base_url').val()+formName+'" class="openForm" target="_blank">Files created, click to see your form in action</a>'); 
            }  
        }); 
    }
    
    // Call the ajax builder  
    function create_db() {
        // Get fields infos
        formDatas = analyseFields();
        formName = $('#formName').val();
        cssName = $('#cssName').val();
                        
        // Call the ajax builder
        $.ajax({  
            url: $('#base_url').val()+"generator/dbCreator",  
            dataType: 'json',  
            data: {
                'formName' : formName, 
                'cssName' : cssName,
                'formDatas' : formDatas
            },
            type: 'post', 
            success: function(data){  
                               
            }  
        }); 
    }              
});