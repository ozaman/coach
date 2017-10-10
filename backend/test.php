<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Simple list filter</title>
  <link href="https://github.com/Kilian/sencss/raw/master/source/sen.css" rel="stylesheet" type="text/css">
  <style>
    body {
      background:#fff
      font-size:13px;
    }
    #wrap {
      position:relative;
      width:220px;
      margin:50px auto 0;
    }
    #header{position:relative;line-height:1em;}
    .filterform {
      width:220px;
      font-size:12px;
      display:block;
    }
    .filterform input {
      -moz-border-radius:5px;
      border-radius:5px;
      -webkit-border-radius:5px;
    }
   </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script>

// Copyright (c) 2010 Kilian Valkhof

// Permission is hereby granted, free of charge, to any person
// obtaining a copy of this software and associated documentation
// files (the "Software"), to deal in the Software without
// restriction, including without limitation the rights to use,
// copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the
// Software is furnished to do so, subject to the following
// conditions:

// The above copyright notice and this permission notice shall be
// included in all copies or substantial portions of the Software.

// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
// EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
// OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
// NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
// HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
// WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
// FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
// OTHER DEALINGS IN THE SOFTWARE.



(function ($) {
  // custom css expression for a case-insensitive contains()
  jQuery.expr[':'].Contains = function(a,i,m){
      return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
  };


  function listFilter(header, list) {
      console.log(list)
   // header is any element, list is an unordered list
    // create and add the filter form to the header
    var form = $("<form>").attr({"class":"filterform","action":"#"}),
        input = $("<input>").attr({"class":"filterinput","type":"text"});
    $(form).append(input).appendTo(header);

    $(input)
      .change( function () {
        var filter = $(this).val();
        console.log(filter)
        if(filter) {
          // this finds all links in a list that contain the input,
          // and hide the ones not containing the input while showing the ones that do
          $(list).find("a:not(:Contains(" + filter + "))").parent().slideUp();
          $(list).find("a:Contains(" + filter + ")").parent().slideDown();
        } else {
          $(list).find("li").slideDown();
        }
        return false;
      })
    .keyup( function () {
        // fire the above change event after every letter
        $(this).change();
    });
  }


  //ondomready
  $(function () {
    listFilter($("#header"), $("#list"));
  });
}(jQuery));

  </script>

</head>
<body>
<div id="wrap">
  <h1 id="header">List of countries</h1>
  <ul id="list">
		<li><a href="#/australia/">Australia</a></li>
		<li><a href="#/austria/">Austria</a></li>
		<li><a href="#/belgium/">Belgium</a></li>
		<li><a href="#/brazil/">Brazil</a></li>
		<li><a href="#/canada/">Canada</a></li>
		<li><a href="#/denmark/">Denmark</a></li>
		<li><a href="#/finland/">Finland</a></li>
		<li><a href="#/france/">France</a></li>
		<li><a href="#/germany/">Germany</a></li>
		<li><a href="#/greece/">Greece</a></li>
		<li><a href="#/ireland/">Ireland</a></li>
		<li><a href="#/israel/">Israel</a></li>
		<li><a href="#/italy/">Italy</a></li>
		<li><a href="#/japan/">Japan</a></li>
		<li><a href="#/luxembourg/">Luxembourg</a></li>
		<li><a href="#/mexico/">Mexico</a></li>
		<li><a href="#/netherlands/">Netherlands</a></li>
		<li><a href="#/norway/">Norway</a></li>
		<li><a href="#/poland/">Poland</a></li>
		<li><a href="#/portugal/">Portugal</a></li>
		<li><a href="#/russia/">Russia</a></li>
		<li><a href="#/spain/">Spain</a></li>
		<li><a href="#/sweden/">Sweden</a></li>
		<li><a href="#/switzerland/">Switzerland</a></li>
		<li><a href="#/turkey/">Turkey</a></li>
		<li><a href="#/united-kingdom/">United Kingdom</a></li>
		<li><a href="#/united-states/">United States</a></li>
	</ul>
	

</body>
</html>

