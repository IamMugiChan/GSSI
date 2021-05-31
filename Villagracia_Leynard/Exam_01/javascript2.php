<script type="text/javascript">
	var json_ob = '{"success" : true ,"employees" :[{"id" : "1" ,"firstName" : "John" ,"lastName" : "Doe" ,"birthday" : "1990-05-07" ,"gender" :{"male" : true ,"female" : false},"knownLanguage" :["English" ,"Japanese" ,"Chinese"]},{"id" : "2" ,"firstName" : "Lina" ,"lastName" : "Art" ,"birthday" : "1994-08-05" ,"gender" :{"male" : false ,"female" : true},"knownLanguage" :["English" ,"Japanese"]}]}';

	parse = JSON.parse(json_ob);
	document.write(JSON.stringify(parse.employees[0]))
</script>