<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .container {
            width: 100%;
            height: 100vh;
            background: #f6f6f9;
        }
        
        #header-section {
            width: 100%;
            height: 8vh;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10px;
        }
        
        #header-section img {
            width: 50px;
            height: 50px;
        }
        
        aside {
            height: 100%;
            width: 15%;
            background: white;
            margin: 5px 15px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 0 5px grey;
            ;
            /* padding-top: 10px; */
        }
        
        aside a {
            padding-top: 10px;
            padding-bottom: 10px;
            width: 100%;
            text-decoration: none;
            text-align: center;
        }
        
        aside a:hover {
            background-color: #7380ec;
            color: white;
        }
        
        main {
            width: 82%;
            height: 100%;
            /* background:white */
            padding-right: 20px;
        }
        
        main .top-section {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        
        main .top-section .search {
            width: 50%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
        
        main .top-section .search form {
            width: 90%;
        }
        
        main .top-section .search form input {
            box-shadow: 0 0 3px gray;
            width: 100%;
            padding: 12px 10px;
            margin-top: 10px;
            border: none;
            border-radius: 0px 10px 10px 0;
            /* padding-bottom: 30px; */
        }
        
        main a {
            padding: 10px 20px;
            box-shadow: 0 0 3px gray;
            text-decoration: none;
            background-color: white;
            margin-top: 10px;
            display: inline-block;
            border-right: 1px solid grey;
            ;
        }
        
        #create {
            box-shadow: 0 0 5px gray;
            width: 150px;
            border-radius: 10px;
            text-align: center;
        }
        
        #create:hover {
            background-color: #f6f6f9;
        }
        
        main table {
            border-collapse: collapse;
            width: 100%;
            /* margin-right:10px; */
            border-radius: 10px;
            margin-top: 20px;
            background: white;
        }
        
        table {
            box-shadow: 0 0 5px rgb(103, 98, 98);
        }
        
        table,
        th,
        td {
            border-bottom: 1px solid #7380ec;
            text-align: center;
        }
        
        td,
        th {
            padding-top: 5px;
            padding-bottom: 5px;
        }
        
        .aside-main {
            display: flex;
            justify-content: space-between;
            width: 100%;
            height: 90vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <header id="header-section">
            <select name="" id="">
                <option value="">pashto</option>
                <option value="">english</option>
            </select>
            <div class="content">
                <h3>Ningarhar university</h3>
                <h4>faculty of public addministraion</h4>
            </div>
            <img src="banner_11.jpg" alt="">
        </header>
        <div class="aside-main">

            <aside>
                <a href="">Student</a>
                <a href="">book</a>
                <a href="">Teacher</a>
                <a href="">curriculum</a>
                <a href="">class</a>
            </aside>
            <main>
                <div class="top-section">

                    <div class="search">
                        <a href="#" id="search">Search</a>
                        <form action="">
                            <input type="search" placeholder="Search">
                        </form>
                    </div>
                    <a href="" id="create">Create</a>
                </div>
                <table>
                    <tr>
                        <th>name</th>
                        <th>last name</th>
                        <th>age</th>
                    </tr>
                    <tr>
                        <td>sharif</td>
                        <td>bina</td>
                        <td>bage</td>
                    </tr>
                </table>
            </main>
        </div>
    </div>
</body>

</html>