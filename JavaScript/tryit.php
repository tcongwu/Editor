
<html >
	<head>
		<title>HTML&JavaScript Editor</title>
		<link rel="stylesheet" type="text/css" href="./tryit/tryit.css">
	</head>

	<body>
	 
		<table border="0" class="maintable" cellpadding="3px" cellspacing="3px">
		  
			<tbody>
				<tr>
					<td width="50%">
                        <p class="result_header"><h3>HTML & JavaScript Editor</h1></p>   
						<form action="./tryit/convert.php" method="post">
							<input type="submit" value="Run"  />      
								<textarea class="code_input" width="100%" height="400px"  name="content" id="content" wrap="logical">
									<!DOCTYPE html>
<html>
  <head>
    <title>Example of Binary Tree</title>
    <link rel="stylesheet" href="http://algoviz.org/OpenDSA/dev/OpenDSA/JSAV/css/JSAV.css" type="text/css" media="screen" title="no title" charset="utf-8" />
    <style>
    .jsavtree { margin-bottom: 30px; }
    .jsavnode { width: 5px; height: 5px; background-color: black; }
    .jsavvalue { display: inline-block; left: -22.5px; position: relative; text-align: center; top: -5px; width: 50px;}
    </style>
  </head>
  <body>
    <div id="av">
      <div class="jsavcontrols"></div>
      <p class="jsavoutput jsavline"></p>
    </div>
    <script
       src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
    <script src="http://algoviz.org/OpenDSA/dev/OpenDSA/JSAV//lib/jquery.transform.light.js"></script>
    <script src="http://algoviz.org/OpenDSA/dev/OpenDSA/JSAV//lib/raphael.js"></script>
    <script src="http://algoviz.org/OpenDSA/dev/OpenDSA/JSAV//build/JSAV.js"></script>
    <script>
    var jsav = new JSAV("av");
    var bt = jsav.ds.bintree({center: false});
    bt.root(""); // set the value of the root
    
    bt.root().highlight(); //highlight root
    bt.root().left(""); // set left child
    
    bt.root().right("cat"); // set right, store reference
    
    bt.root().left().right("ant");
    bt.layout();
    jsav.recorded(); // done recording changes, will rewind
    </script>
  </body>
</html>								</textarea>
						</form>
					</td>

					<td valign="top">
						<p>&nbsp;</p>
						<p class="result_header">Your Result:</p>
						<iframe class="result_output" name="result_output" id="result_output" width="100%"  frameborder="0" name="view" src="./tryit/tryit_view.html">
						</iframe>
					</td>
				</tr>
				<tr>
					<td align="left" class="bottomtext">
						Edit the code above and click to see the result.
					</td>

				</tr>
			</tbody>
		</table>
	</body>
</html>