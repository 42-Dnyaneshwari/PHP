<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Data Types</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    </p>
    </div>

    <ul >
        <h2>Data Types in PHP</h2>
        <li>1.String</li>
        <li>2.Integers</li>
        <li>3.Float</li>
        <li>4.Boolean</li>
        <li>5.Object</li>
        <li>6.Array</li>
        <li>7.NULL</li>
    </ul>
    <h6>
        <?php
        $name = "Dnyaneshwari"; #string
        $Rno = 42; #interger
        $salary = 5678.98; #float
        $clg = "Sanjivani Collge of Engineering"; #object
        #$name=NULL;
        echo var_dump($name);#checking the datatype of name
        echo "<br>";
        $friends = array("Dnyanu", "Madhu", "Prachi", "Sumit");
        echo "This is $name";
        echo "<br>";
        echo $Rno;
        echo "<br>";
        echo $salary;
        echo "<br>";
        echo $clg;
        echo "<br>";
        echo var_dump($clg);
        echo "<br>";
        echo "These are my friends<br> ";
        echo var_dump($friends);
        echo "<br>";
        echo $friends[0];
        echo "<br>";
        echo $friends[1];
        echo "<br>";
        echo $friends[2];
        echo "<br>";
        echo $friends[3];
        echo "<br>";

        ?>
    </h6>

</body>

</html>