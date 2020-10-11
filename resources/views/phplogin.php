<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://unpkg.com/gojs/release/go-debug.js"></script>
  <script src="https://d3js.org/d3.v6.js"></script>
  <script src="https://d3js.org/d3-selection.v2.js"></script>
</head>
<body>
<?php
 $zoom=50;
// function zoomup(){
//   $zoom=+10;
// }
// function zoomdown(){
//   $zoom=-10;
// }
?>


<center>
<div id="myDiagramDiv"
     style="width:800px; height:500px; background-color: #DAE4E4;">
     </div>
     จำนวน:<input type="text">
     <button type="sumit" >shows</button>
     <input id="ZoomIn" type="button" onclick="myDiagram.commandHandler.increaseZoom()" value="Zoom +">
     <input id="ZoomOut" type="button" onclick="myDiagram.commandHandler.decreaseZoom()" value="Zoom -">
     <button  id="button2">zoom page</button>
     
     </center>
     
  <script>
  
  // function zoomupjs(){
  //   console.log("up")
  //   <?php
  //   zoomup();
  //     ?>
  //     myDiagram.model = myDiagram.model;
  //   //myDiagram.requestUpdate();
  // }
  // function zoomdownjs(){
  //   console.log("down")
    
  //   <?php
  //   zoomdown();
  //     ?>
  //     myDiagram.requestUpdate();
  // }
  var treesfamily = go.GraphObject.make;

var myDiagram =
  treesfamily(go.Diagram, "myDiagramDiv",
    {
      "undoManager.isEnabled": true,
      layout: treesfamily(go.TreeLayout,
                { angle: 90, layerSpacing: 35 })
    });

// the template we defined earlier
myDiagram.nodeTemplate =
  treesfamily(go.Node, "Horizontal",
    { background: "Blue" },
    treesfamily(go.Picture,
      { margin: 10, width: <?php echo $zoom;?>, height: 60, background: "White" },
      new go.Binding("source")),
    treesfamily(go.TextBlock, "Default Text",
      { margin: 12, stroke: "white", font: "bold 16px sans-serif" },
      new go.Binding("text", "name"))
  );

      // define a Link template that routes orthogonally, with no arrowhead
      myDiagram.linkTemplate =
        treesfamily(go.Link,
          { routing: go.Link.Orthogonal, corner: 5 },
          treesfamily(go.Shape, // the link's path shape
            { strokeWidth: 3, stroke: "#555" }));

      var model = treesfamily(go.TreeModel);
      model.nodeDataArray =
      [
        <?php
        use App\relationmodel;
        $count=relationmodel::count();
          $book= relationmodel::all();
        for ($x=0; $x < $count; $x++) { 
              echo "{";
           ?>key:"<?php echo $book[$x]->my;?>",
           parent:"<?php echo $book[$x]->Father;?>",
           name:"<?php echo $book[$x]->my;?>",
           <?php echo "}";?>,<?php
           }
?>
        // { key: "2", parent: "ปู่", name: "Demeter",},
        // { key: "3", parent: "ปู่", name: "Copricat",},
        // { key: "ปู่",              name: "Don Meow",},
        // { key: "4", parent: "3", name: "Jellylorum",},
        // { key: "5", parent: "3", name: "Alonzo",},
        // { key: "6", parent: "2", name: "Munkustrap",}
      ];
      myDiagram.model = model;
      var button2 = document.getElementById('button2');
    button2.addEventListener('click', function() {
      var div = myDiagram.div;
      div.style.width ='1000px';
      console.log(div.style.width=='600px');
      model.nodeDataArray =[
        
      ]
      myDiagram.requestUpdate(); // Needed!
    });
    
  </script>
  <?php
  function sorttree($test,$t){
    $count=relationmodel::count();
    $book= relationmodel::all();
    for($c=0; $c < $count; $c++){
      if($book[$c]->Father==$t){
        array_push($test,$book[$c]->my);
        $test=sorttree($test,$book[$c]->my);
      }
    }
    return $test;
  }
  $test=array();
  for ($x=0; $x < $count; $x++){
    if($book[$x]->Father==null){
      array_push($test,($book[$x]->my));
    }
  }
  $test=sorttree($test,$test[0]); 
  print_r($test); 
  // $user = relationmodel::where('my','C' )->first();
  // echo $user;
  // $user->level=1;
  // $user->save();
  
  // echo $user->level;
  ?>

</body>
</html>