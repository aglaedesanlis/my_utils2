<head>
    <meta charset="utf-8">
    <title>Listes des taches à faire</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    </style>
    <div id="myDIV" class="header">
        <h2 style="margin:5px">My To Do List</h2>
        <input type="text" id="myInput" placeholder="à faire...">
        <span onclick="newElement()" class="addBtn">:)</span>
    </div>
    <ul id="myUL">
        <li>apprendre l'utlisation du php</li>
        <li class="checked">SQL</li>
        <li>revoir margin et padding</li>
        <li>realiser un tableau</li>
        <li>comprendre une base de donnee</li>
        <li>Organiser son travail de la semaine prochaine</li>
    </ul>
    <script>
        var myNodelist = document.getElementsByTagName("LI");
        var i;
        for (i = 0; i < myNodelist.length; i++) {
            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            span.className = "close";
            span.appendChild(txt);
            myNodelist[i].appendChild(span);
        }

        var close = document.getElementsByClassName("close");
        var i;
        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
            }
        }

        var list = document.querySelector('ul');
        list.addEventListener('click', function(ev) {
            if (ev.target.tagName === 'LI') {
                ev.target.classList.toggle('checked');
            }
        }, false);

        function newElement() {
            var li = document.createElement("li");
            var inputValue = document.getElementById("myInput").value;
            var t = document.createTextNode(inputValue);
            li.appendChild(t);
            if (inputValue === '') {
                alert("You must write something!");
            } else {
                document.getElementById("myUL").appendChild(li);
            }
            document.getElementById("myInput").value = "";
            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            span.className = "close";
            span.appendChild(txt);
            li.appendChild(span);
            for (i = 0; i < close.length; i++) {
                close[i].onclick = function() {
                    var div = this.parentElement;
                    div.style.display = "none";
                }
            }
        }
    </script>
</body>

<footer>
    <nav>
        <ul>
            <li><a href="taches_finies.php?page=taches_finies">FINIE</a> </li>
    
        </ul>
    </nav>
    </footer>