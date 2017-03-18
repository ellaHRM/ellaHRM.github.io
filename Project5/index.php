<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
</head>
<body>
    <div class="wrapper">

        <?php require_once('top.php'); ?>
        <div class="heading">
            <h1>About us</h1>
        </div>

        <aside>
        <?php require_once('leftside.php'); ?>
            <h2>our offices</h2>
            <p>
                <img src="images/sample.png" alt="">
            </p>
        </aside>
        <section>
            <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non neque ac sem accumsan rhoncus ut ut turpis. In hac habitasse platea dictumst."</p>
                <cite>John Doe, lorem Ipsum</cite>
            </blockquote>

            <!-- блок контент -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non neque ac sem accumsan rhoncus ut ut turpis. In hac habitasse platea dictumst. Proin eget nisi erat, et feugiat arcu. Duis semper porttitor lectus, ac pharetra erat imperdiet nec. Morbi interdum felis nulla. Aenean eros orci, pellentesque sed egestas vitae, auctor aliquam nisi. Nulla nec libero eget sem rutrum iaculis. Quisque in enim velit, at dignissim est. Nulla ullamcorper, dolor ac pellentesque placerat, justo tellus gravida erat, vel porttitor libero erat condimentum metus. Donec sodales aliquam orci id suscipit. Proin sed risus sit amet massa ultrices laoreet quis a erat. Aliquam et metus id erat vulputate egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

            <p>Donec vel nisl nibh. Aenean quam tortor, tempus sit amet mattis dapibus, egestas tempor dui. Duis vestibulum imperdiet risus pretium pretium. Nunc vitae porta ligula. Vestibulum sit amet nulla quam. Aenean lacinia, ante vitae sodales sagittis, leo felis bibendum neque, mattis sagittis neque urna vel magna. Sed at sem vitae lorem blandit feugiat.</p>

            <p>Donec vel orci purus, ut ornare orci. Aenean rutrum pellentesque quam. Quisque gravida adipiscing augue, eget commodo augue egestas varius. Integer volutpat, tellus porta tincidunt sodales, lacus est tempus odio, fringilla blandit tortor lectus ut sem. Pellentesque nec sem lacus, sit amet consequat neque. Etiam varius urna quis arcu cursus in consectetur dui tincidunt. Quisque arcu orci, lacinia eget pretium vel, iaculis pellentesque nibh. Etiam cursus lacus eget neque viverra vestibulum. Aliquam erat volutpat. Duis pulvinar tellus ut urna facilisis mollis. Maecenas ac pharetra dui. Pellentesque neque ante, luctus eget congue eget, rhoncus vel mauris. Duis nisi magna, aliquet a convallis non, venenatis at nisl. Nunc at quam eu magna malesuada dignissim. Duis bibendum iaculis felis, eu venenatis risus sodales non. In ligula mi, faucibus eu tristique sed, vulputate rutrum dolor.</p>



            <img src="images/sample.png" alt="">
            <img src="images/sample.png" alt="">

            <h2>our team</h2>
            <div class="team-row">
                <figure>
                    <img src="images/sample.png">
                    <figcaption>John Doe<span>ceo</span></figcaption>
                </figure>
                <figure>
                    <img src="images/sample.png">
                    <figcaption>John Doe<span>ceo</span></figcaption>
                </figure>
                <figure>
                    <img src="images/sample.png">
                    <figcaption>John Doe<span>ceo</span></figcaption>
                </figure>
                <figure>
                    <img src="images/sample.png">
                    <figcaption>John Doe<span>ceo</span></figcaption>
                </figure>
                <figure>
                    <img src="images/sample.png">
                    <figcaption>John Doe<span>ceo</span></figcaption>
                </figure>
            </div>


            <div class="team-row">
                <figure>
                    <img src="images/sample.png">
                    <figcaption>John Doe<span>ceo</span></figcaption>
                </figure>
                <figure>
                    <img src="images/sample.png">
                    <figcaption>John Doe<span>ceo</span></figcaption>
                </figure>
                <figure>
                    <img src="images/sample.png">
                    <figcaption>John Doe<span>ceo</span></figcaption>
                </figure>
                <figure>
                    <img src="images/sample.png">
                    <figcaption>John Doe<span>ceo</span></figcaption>
                </figure>
                <figure>
                    <img src="images/sample.png">
                    <figcaption>John Doe<span>ceo</span></figcaption>
                </figure>
            </div>
        </section>
    </div>
    <footer><?php require_once('footer.php'); ?></footer>
</body>
</html>