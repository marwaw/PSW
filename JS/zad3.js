 function fontsf(font){
switch(font) {
      case 1:              
    document.body.style.fontFamily = "Impact";
        break;
    case 2:
    document.body.style.fontFamily = "sans-serif";
        break;
    case 3:
        document.body.style.fontFamily = "Charcoal";
        break;
        default:
                document.body.style.fontFamily = "Charcoal";
    }
  }

  function colours(colour){
switch(colour) {
    case 1:              
           document.body.setAttribute( "style", 
      "background-color: blue" ); 
        break;
    case 2:
           document.body.setAttribute( "style", 
      "background-color: magenta" ); 
        break;
    case 3:
           document.body.setAttribute( "style", 
      "background-color: cyan"); 
        break;
    default:
           document.body.setAttribute( "style", 
      "background-color: white" ); 
    }
  }

   function fontscol(font){
switch(font) {
      case 1:              
    document.body.style.color = "purple";
        break;
    case 2:
    document.body.style.color = "green";
        break;
    case 3:
        document.body.style.color = "white";
        break;
        default:
                document.body.style.color = "black";
    }
  }


