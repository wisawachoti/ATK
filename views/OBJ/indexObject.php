<style>
    
</style>
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
                            <form method="get" action="">
                            <input type="text" name="key" placeholder="Search here">
                            <input type=hidden name=controller value=Object>
                            <button class="button button1" type="submit" name="action" value="search">
                                <ion-icon name="search-sharp"></ion-icon></button>
                            </form>
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
                            <div class="cardName">AllObjects</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="bag-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers counter" data-target="<?php echo "$CheckFood"?>">0</div>
                            <div class="cardName">AllFood</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="fast-food-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers counter" data-target="<?php echo "$CheckHealth"?>">0</div>
                            <div class="cardName">AllHealth</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="medkit-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Recent Objects</h2>
                            <a href="?controller=Object&action=newObject" class="btn">New</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td> ID </td> 
                                    <td> Name </td>  
                                    <td> Type </td> 
                                    <td> Description </td>
                                    <td> Update </td>
                                    <td> Delete </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($objectlist as $objectas){
                                        echo "
                                                <tr>
                                                <td>$objectas->OBJid</td>
                                                <td>$objectas->OBJname</td>
                                                <td>$objectas->OBJtype</td>
                                                <td>$objectas->OBJdesc</td>
                                                <td> <a class=abc href=?controller=Object&action=updateForm&OBJid=$objectas->OBJid>
                                                    Update </a></td>
                                                <td> <a class=abc href=?controller=Object&action=DeleteConfirm&OBJid=$objectas->OBJid>
                                                    Delete </a></td>
                                                </tr>";
                                            }
                                        echo "</table>";
                                ?>
                            </tbody>
                        </table>
                    </div>

            </div>
            <script>
                const countEl = document.getElementById('count');

                updateVisitCount();

                function updateVisitCount() {
	                fetch('https://api.countapi.xyz/update/yutthana/number/?amount=1')
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

