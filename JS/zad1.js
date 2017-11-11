var currentNode; // stores the currently highlighted node
var idcount = 0; // used to assign a unique id to new elements

// register event handlers and initialize currentNode
function start()
{
   document.getElementById( "byIdButton" ).addEventListener(
      "click", byId, false );
   document.getElementById( "insertListButton" ).addEventListener(
      "click", insertList, false );
   document.getElementById( "insertButton" ).addEventListener(
      "click", insert, false );
   document.getElementById( "appendButton" ).addEventListener(
      "click", appendNode, false );
   document.getElementById( "replaceButton" ).addEventListener(
      "click", replaceCurrent, false );
   document.getElementById( "removeButton" ).addEventListener(
      "click", remove, false );
   document.getElementById( "parentButton" ).addEventListener(
      "click", parent, false );

   // initialize currentNode
   currentNode = document.getElementById( "your-place" );
} // end function start

// call start after the window loads
window.addEventListener( "load", start, false );

// get and highlight an element by its id attribute
function byId()
{
   var id = document.getElementById( "gbi" ).value;
   var target = document.getElementById( id );

   if ( target )
      switchTo( target );
} // end function byId

// insert an element before the current element
// using the insertBefore method
function insertList()
{
   var newNode = createNewNode("h3", document.getElementById( "insTitle" ).value );
   document.getElementById( "your-place" ).appendChild( newNode);

   var newList = createNewNode("ol", "");
   document.getElementById( "your-place" ).appendChild(newList);
   switchTo(newList);
} // end function insert

// insert an element before the current element
// using the insertBefore method
function insert()
{
   var newNode = createNewNode("li", document.getElementById( "ins" ).value );
   currentNode.parentNode.insertBefore( newNode, currentNode );
   switchTo( newNode );
} // end function insert

// append a paragraph node as the child of the current node
function appendNode()
{
   var newNode = createNewNode("li",
      document.getElementById( "append" ).value );
   currentNode.appendChild( newNode );
   switchTo( newNode );
} // end function appendNode

// replace the currently selected node with a paragraph node
function replaceCurrent()
{
   var newNode = createNewNode("p",
      document.getElementById( "replace" ).value );
   currentNode.parentNode.replaceChild( newNode, currentNode );
   switchTo( newNode );
} // end function replaceCurrent

// remove the current node
function remove()
{
   if ( currentNode == document.getElementById( "your-place" ) )
      alert( "Can't remove a top-level element." );
   else
   {
      var oldNode = currentNode;
      switchTo( oldNode.parentNode );
      currentNode.removeChild( oldNode );
   }
} // end function remove

// get and highlight the parent of the current node
function parent()
{
   if (currentNode == document.getElementById( "your-place" ) )
      alert( "No parent." );
   else 
      switchTo(currentNode.parentNode);
} // end function parent

// helper function that returns a new paragraph node containing
// a unique id and the given text
function createNewNode(type, text )
{
   var newNode = document.createElement( type );
   nodeId = "new" + idcount;
   ++idcount;
   newNode.setAttribute( "id", nodeId ); // set newNode's id
   text = "[" + nodeId + "] " + text;
   newNode.appendChild( document.createTextNode( text ) );
   return newNode;
} // end function createNewNode

// helper function that switches to a new currentNode
function switchTo( newNode )
{
   currentNode.setAttribute( "class", "" ); // remove old highlighting
   currentNode = newNode;
   currentNode.setAttribute( "class", "highlighted" ); // highlight
   document.getElementById( "gbi" ).value = 
      currentNode.getAttribute( "id" );
} // end function switchTo