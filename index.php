
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> ace</title>

        <link rel="stylesheet" href="library/css/style.css"/>
        <script src="library/js/jquery.min.js"></script>
        <script type="text/javascript" src="library/js/acoord.js"></script>
        <script src="http://code.jboxcdn.com/0.3.2/jBox.min.js"></script>
    </head>
    <body>


<ul class="cd-accordion-menu a animated">
    <li class="has-children">
        <input type="checkbox" name ="group-1" id="group-1">
        <label for="group-1"> Herro </label>

        <ul>
            <li>hello</li>
        </ul>
    </li>
</ul>


<p id="hhhh">hee</p>
<script>
    $(document).ready(function() {
        new jBox('Modal', {
            attach: $('#hhhh'),
            title: 'jee',
            overlay: false,
            content: '',
            draggable: '',
            ajax: {
                url: 'alt.php',
                data: 'id=34',
                overlay: false,
                title: 'Contact Us',
                reload: true
            }
        });
    });
</script>



    </body>
</html>
