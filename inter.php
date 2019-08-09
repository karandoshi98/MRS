<?php include ('recommend.php');?>
<!DOCTYPE html>
<html>
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<title>Incremental Tree</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<meta name="description" content="Incrementally grow a tree as each node is expanded for the first time." />
<link rel="stylesheet" type="text/css" href="inter.css">

<!-- Copyright 1998-2018 by Northwoods Software Corporation. -->
<meta charset="UTF-8">
<script src="go.js"></script>
<script src="goSamples.js"></script>  <!-- this is only for the GoJS Samples framework -->
<script id="code">
  y="";
  ar="";
  count=0;
  x=window.location.href;
    x=x.slice(34);
    arr = x.split("$$");
    ar=arr;

  function k1(c,key)
                  {
                    // alert(key);
                  $.ajax({
                    type: "POST",
                    url: 'key.php',
                    async: false,
                    data: {arr: c, key: key},
                    success: function(data)
                    {
                      y=data;
                    },
                    error: function() {
                      // body...
                      alert("ERROR 123");
                    }

                });
                }

  function k2(c1)
                {
                  $.ajax({
                    type: "POST",
                    url: 'key1.php',
                    async: false,
                    data: {arr: c1},
                    success: function(data)
                    {
                      window.location="inter.php?x="+data;
                    }
                  });
                }

  function init() {
    
    

    if (window.goSamples) goSamples();  // init for these samples -- you don't need to call this
    var $ = go.GraphObject.make;  // for conciseness in defining templates
    var blues = ['#E1F5FE', '#B3E5FC', '#81D4FA', '#4FC3F7', '#29B6F6', '#03A9F4', '#039BE5', '#0288D1', '#0277BD', '#01579B','#70aef1','#588abf', '#4873a0', '#396ba0', '#3169a5', '#2e72bb'];
    myDiagram =$(go.Diagram, "myDiagramDiv",  // must name or refer to the DIV HTML element
        {
          initialAutoScale: go.Diagram.UniformToFill,
          contentAlignment: go.Spot.Center,
          layout: $(go.ForceDirectedLayout),
          // moving and copying nodes also moves and copies their subtrees
          "commandHandler.copiesTree": true,  // for the copy command
          "commandHandler.deletesTree": true, // for the delete command
          "draggingTool.dragsTree": true,  // dragging for both move and copy
          "undoManager.isEnabled": true
        });
    // Define the Node template.
    // This uses a Spot Panel to position a button relative
    // to the ellipse surrounding the text.
    myDiagram.nodeTemplate =
      $(go.Node, "Spot",
        {
          selectionObjectName: "PANEL",
          isTreeExpanded: false,
          isTreeLeaf: false,
          isClipping: true,
          scale: 2
          },
        // the node's outer shape, which will surround the text
        $(go.Panel, "Auto",
          { name: "PANEL" },
          $(go.Shape, "Circle",
            { fill: "whitesmoke", stroke: "black", width: 65, strokeWidth: 0 , height: 65},
            new go.Binding("fill", "rootdistance", function(dist) {
              dist = Math.min(blues.length - 1, dist);
              return blues[dist];
            })),
          $(go.Picture, arr[0],
          { width: 65, height: 65 },
          new go.Binding("source", "icon"))),
          new go.Binding("text", "key"),
        // the expand/collapse button, at the top-right corner
        $("TreeExpanderButton",
          {
            name: 'TREEBUTTON',
            width: 10, height: 10,
            alignment: go.Spot.Center,
            alignmentFocus: go.Spot.Center,
            // customize the expander behavior to
            // create children if the node has never been expanded
            click: function (e, obj) {  // OBJ is the Button
                var node = obj.part;  // get the Node containing this Button
                if (node === null) return;
                e.handled = true;
                key=node.data.key;
                if(key!=0){
                  if(key>4){
                    k2(arr[key-4]);
                    // alert(key-4);
                  }
                  else{
                    k1(ar[key],key);
                  }

                  // alert(y);
                  
                  arr = y.split('$$');
                }
                expandNode(node);
              }
          }
        )  // end TreeExpanderButton
      );  // end Node
    // create the model with a root node data
    myDiagram.model = new go.TreeModel([
      { key: 0, color: blues[0], everExpanded: false },
  
    ]);
    document.getElementById('zoomToFit').addEventListener('click', function() {
      myDiagram.zoomToFit();
    });
    // document.getElementById('expandAtRandom').addEventListener('click', function() {
    //   expandAtRandom();
    // });
  }
  function expandNode(node) {
    var diagram = node.diagram;
    diagram.startTransaction("CollapseExpandTree");
    // this behavior is specific to this incrementalTree sample:
    var data = node.data;
    if (!data.everExpanded) {
      // only create c-hildren once per node
      diagram.model.setDataProperty(data, "everExpanded", true);
      var numchildren = createSubTree(data);
      if (numchildren === 0) {  // now known no children: don't need Button!
        node.findObject('TREEBUTTON').visible = false;
      }
    }
    // this behavior is generic for most expand/collapse tree buttons:
    if (node.isTreeExpanded) {
      diagram.commandHandler.collapseTree(node);
    } else {
      diagram.commandHandler.expandTree(node);
    }
    diagram.commitTransaction("CollapseExpandTree");
    myDiagram.zoomToFit();

  }
  // This dynamically creates the immediate children for a node.
  // The sample assumes that we have no idea of whether there are any children
  // for a node until we look for them the first time, which happens
  // upon the first tree-expand of a node.
  function createSubTree(parentdata) {
    var numchildren = 4;
    if (myDiagram.nodes.count <= 1) {
      numchildren += 1;  // make sure the root node has at least one child
    }
    // create several node data objects and add them to the model
    var model = myDiagram.model;
    var parent = myDiagram.findNodeForData(parentdata);
    var degrees = 1;
    var grandparent = parent.findTreeParentNode();
    while (grandparent) {
      degrees++;
      grandparent = grandparent.findTreeParentNode();
    }
    for (var i = 1; i <numchildren; i++) 
    {
      var childdata = {
        key: model.nodeDataArray.length,
        parent: parentdata.key,
        rootdistance: degrees,
        icon: arr[i],
        // key: i
      };
      // add to model.nodeDataArray and create a Node
      model.addNodeData(childdata);
      // position the new child node close to the parent
      var child = myDiagram.findNodeForData(childdata);
      child.location = parent.location;
    }
    return numchildren;
  }



  // function expandAtRandom() {
  //   var eligibleNodes = [];
  //   myDiagram.nodes.each(function(n) {
  //     if (!n.isTreeExpanded) eligibleNodes.push(n);
  //   })
  //   var node = eligibleNodes[Math.floor(Math.random() * (eligibleNodes.length))];
  //   expandNode(node);
  // }
</script>
</head>
<body onload="init()">
<div id="sample">
  <div id="myDiagramDiv" style="background-color: white; border: solid 1px black; width: 100%; height: 600px"></div>
  <p><button id="zoomToFit" style="display: none">zoom to fit</button></p>
</div>

<h4 style="color: white; margin-top: -5px; margin-bottom: 15px;">Recommended movies</h4>




<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container" id="top">
  <div class="row">
  
    <div onclick="show(0);" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie[0];?>">
      <span style="color: white"><b><i><?php echo $mname[0]; ?><br>
        <?php echo $mrating[0]; ?>/5
</i></b></span>
    </div >
    <div onclick="show(1)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie[1];?>">
      <span style="color: white"><b><i><?php echo $mname[1]; ?><br>
        <?php echo $mrating[1]; ?>/5
    </i></b></span>
    </div >
    <div onclick="show(2)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie[2];?>">
      <span style="color: white"><b><i><?php echo $mname[2]; ?><br>
        <?php echo $mrating[2]; ?>/5
      </i></b></span>
    </div >
    <div onclick="show(3)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie[3];?>">
      <span style="color: white"><b><i><?php echo $mname[3]; ?><br>
        <?php echo $mrating[3]; ?>/5
      </i></b></span>
    </div >
    <div onclick="show(4)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie[4];?>">
      <span style="color: white"><b><i><?php echo $mname[4];?><br>
        <?php echo $mrating[4]; ?>/5
    </i></b></span>
    </div >
    <div onclick="show(5)" class="col-sm-6 col-lg-3 col-md-4 col-xl-2">
      <img src="<?php echo $movie[5];?>">
      <span style="color: white"><b><i><?php echo $mname[5]; ?><br>
        <?php echo $mrating[5]; ?>/5
      </i></b></span>
    </div>
  
  </div>
</div>
    </div>
    
</div>
</div>
<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript">
  
function show(t){
    $.ajax({
                    type: "POST",
                    url: 'show1_data.php',
                    async: false,
                    data: {n: t},
                    success: function(data)
                    {
                      window.location="inter.php?x="+data;
                    },
                    error: function() {
                      // body...
                      alert("ERROR");
                    }
                });
}

</script>
</body>
</html>