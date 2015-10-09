


function pruefe(feld)
{//pruefe ob feld weniger als 2 zeichen ubergeben wurde 
	var feldwert = feld.value;
	if(feld.value.length <=2) 
	{//wenn ja roten Rahmen ums Feld
		//feld.style.borderColor = "red"; das selbe wie unten
		feld.style.border = "2px solid red";
	}
	else
	{//wenn OK dann grunen rahmen
		feld.style.border = "2px solid green";
	}
}






	
/////////////////////////////////
//jquery
//warte bis document geladen ist und fuhre folgende Funktionen aus
$(document).ready(function()
{
$("#titel").on("keyup",function()
	{
		//pruefen ob Feld leer ist, wenn ja -> Button disabled setzen
		if($(this).val()=="")
		{	//Button auf disabled setzen
			$("button[name=speichern]").attr("disabled","");// prop heisst setzen, man kann auch attr anstatt prop schreiben
		}else
		{//wenn etwas eingegeben wurde, dann Remove(entferne) disabled
			$("button[name=speichern]").removeAttr("disabled");
		}
	})

	
	
	
	
	
	 $( "input[name=beginn], input[name=ende]" ).datepicker();
		jQuery(function($){
        $.datepicker.regional['de'] = {clearText: 'löschen', clearStatus: 'aktuelles Datum löschen',
                closeText: 'schließen', closeStatus: 'ohne Änderungen schließen',
                prevText: '<zurück', prevStatus: 'letzten Monat zeigen',
                nextText: 'Vor>', nextStatus: 'nächsten Monat zeigen',
                currentText: 'heute', currentStatus: '',
                monthNames: ['Januar','Februar','März','April','Mai','Juni',
                'Juli','August','September','Oktober','November','Dezember'],
                monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
                'Jul','Aug','Sep','Okt','Nov','Dez'],
                monthStatus: 'anderen Monat anzeigen', yearStatus: 'anderes Jahr anzeigen',
                weekHeader: 'Wo', weekStatus: 'Woche des Monats',
                dayNames: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
                dayNamesShort: ['So','Mo','Di','Mi','Do','Fr','Sa'],
                dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa'],
                dayStatus: 'Setze DD als ersten Wochentag', dateStatus: 'Wähle D, M d',
                dateFormat: 'yy-mm-dd', firstDay: 1, 
                initStatus: 'Wähle ein Datum', isRTL: false};
        $.datepicker.setDefaults($.datepicker.regional['de']);
		});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$("select[name=region] option").each(function()
		{ //wenn data Region == value entspricht, dann setze attribut selected 
			if ($(this).attr("data-region") == $(this).val())
			{
				$(this).attr("selected","selected");
			}
		}								);
	
	
	
	
	
	
});




function filter(region)
{


	//alert(region.value);
	
	// if(region.value != region.value) 
	// {
		
		// alert(region.value);
		window.location.href='index.php?aktion=filter&id='+region.value;
	// }
	// else
	// {
		// alert(region.value);
	// }
}







function loeschBeitrag(id) 
{ 
	if(confirm("Wollen Sie den Beitrag löschen?"))
	{ 
		window.location.href='index.php?aktion=delete&id='+id;
	} 
	else 
	{ 
		
	} 
} 


