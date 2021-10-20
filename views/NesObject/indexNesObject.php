<!--<html>
    <body>
        Hello Again!<br>
        I'm Yutthana Piyawongwatthana 6220500709<br>
        New Necessary Object : <a href="?controller=NesObject&action=newNesObject">Click </a><br>
        <form method="get" action="">
            <input type="text" name="key">
            <input type="hidden" name="controller" value="NesObject">
            <button class="button button1" type="submit" name="action" value="search">
                Search</button>
        </form>
    </body>-->
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <!--<div class="main">
                <div class="topbar">
                    <div class="toggle">
                    <ion-icon name="reorder-four-outline"></ion-icon>
                    </div>
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search here">
                            <ion-icon name="search-sharp"></ion-icon>
                        </label>
                    </div>
                </div>-->

                <div class="cardBox">
                    
                    <div class="card">
                        <div>
                            <div class="numbers" id="count">0</div>
                            <div class="cardName">Daily Views</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                    </div>
                    

                    <div class="card">
                        <div>
                            <div class="numbers counter" data-target="<?php echo "$CheckAll"?>">0</div>
                            <div class="cardName">AllNecessaryObject</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="cart-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers counter" data-target="<?php echo "$CheckQuantity"?>">0</div>
                            <div class="cardName">AllQuantity</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="albums-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers counter" data-target="<?php echo "$CheckHomeIsolation"?>">0</div>
                            <div class="cardName">AllHomeIsolation</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="people-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Recent NecessaryObject</h2>
                            <a href="?controller=NesObject&action=newNesObject" class="btn">New</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td> Necessary Object ID </td> 
                                    <td> Object ID </td>  
                                    <td> Object Name </td> 
                                    <td> Necessary Object Quantity </td>
                                    <td> Home Isolation ID </td>
                                    <td> People Name </td>
                                    <td> Update </td>
                                    <td> Delete </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($nesobjectlist as $nesobjectas){
                                        echo "
                                            <tr>
                                                <td>$nesobjectas->NESid</td>
                                                <td>$nesobjectas->OBJid</td>
                                                <td>$nesobjectas->OBJname</td>
                                                <td>$nesobjectas->NESquantity</td>
                                                <td>$nesobjectas->HIid</td>
                                                <td>$nesobjectas->PPname</td>
                                                <td> <a class=abc href=?controller=NesObject&action=updateForm&NESid=$nesobjectas->NESid>
                                                  Update </a></td>
                                                <td> <a class=abc href=?controller=NesObject&action=DeleteConfirm&NESid=$nesobjectas->NESid>
                                                  Delete </a></td>
                                            </tr>";
                                    }
                                    echo "</table>";
                                ?>
                            </tbody>
                        </table>
                    </div>

            </div>
        </div>
        <script>
                const countEl = document.getElementById('count');

                updateVisitCount();

                function updateVisitCount() {
	                fetch('https://api.countapi.xyz/update/yutthana/number3/?amount=1')
	                .then(res => res.json())
	                .then(res => {
		                countEl.innerHTML = res.value;
	                })
                }
                const counters = document.querySelectorAll('.counter');
                const speed = 2000;

                counters.forEach(counter => {
	                const updateCount = () => {
		                const target = +counter.getAttribute('data-target');
		                const count = +counter.innerText;

		                const inc = target / speed;

		                if (count < target) {
			                counter.innerText = Math.ceil(count + inc);
			                setTimeout(updateCount, 40);
		                } else {
			                counter.innerText = target;
		                }
	                };

	                updateCount();
                });
        </script>
    </body>
</html>