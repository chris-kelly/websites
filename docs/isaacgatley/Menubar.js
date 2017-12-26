		function openSubmenu() {
		    var v = document.getElementById("submenu");
			    if (v.className != "no_show")
			       {v.className = "no_show"}
			    else {v.className = "show"}
			var w = document.getElementById("rotate1");
			    if (w.className != "rotatesmall")
			       {w.className = "rotatesmall"}
			    else {w.className = "rotateoff"}
		    var x = document.getElementById("rotate2");
			    if (x.className != "rotatebig")
			       {x.className = "rotatebig"}
			    else {x.className = "rotateoff"}
		    var y = document.getElementById("top");
			    if (y.className != "not_visible")
			       {y.className = "not_visible"}
			    else {y.className = "visible"}
		    var z = document.getElementById("bottom");
			    if (z.className != "not_visible")
			       {z.className = "not_visible"}
			    else {z.className = "visible"}  
			}
