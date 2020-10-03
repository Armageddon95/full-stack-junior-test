$(function() { 
        $("#ListId-left").sortable({ 
            update: function(event, ui) { 
                    getleftIds(); 
                } //end update          
        }); 
    }); 
	
	$(function() { 
        $("#ListId-right").sortable({ 
            update: function(event, ui) { 
                    getIds(); 
                } //end update          
        }); 
    }); 
	
	function getIds() { 
        var values = []; 
        $('.draggable-right').each(function(index) { 
            values.push($(this).attr("id") 
                        .replace("right_", "")); 
        }); 
        $('#outputvalues-right').val(values); 
		
    }  
  
    function getleftIds() { 
        var values = []; 
        $('.draggable-left').each(function(index) { 
            values.push($(this).attr("id") 
                        .replace("left_", "")); 
        }); 
        $('#outputvalues-left').val(values); 
    }  