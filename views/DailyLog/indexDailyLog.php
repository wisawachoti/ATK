<!--<html>
    <body>
        Hello Again!<br>
        I'm Yutthana Piyawongwatthana 6220500709<br>
        New DailyLog : <a href="?controller=DailyLog&action=newDailyLog">Click </a><br>
        <form method="get" action="">
            <input type="text" name="key">
            <input type="hidden" name="controller" value="DailyLog">
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

                <div class="search">
                        <label>
                            <form method="get" action="">
                            <input type="text" name="key" placeholder="Search here">
                            <input type=hidden name=controller value=DailyLog>
                            <button class="button button1" type="submit" name="action" value="search">
                                <ion-icon name="search-sharp"></ion-icon></button>
                            </form>
                        </label>
                    </div>
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
                            <div class="cardName">AllDailyLog</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="calendar-clear-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers counter" data-target="<?php echo "$CheckGreen"?>">0</div>
                            <div class="cardName">AllGreenColour</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="leaf-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers counter" data-target="<?php echo "$CheckYellow"?>">0</div>
                            <div class="cardName">AllYellowColour</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="color-palette-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>All DailyLog</h2>
                            <a href="?controller=DailyLog&action=newDailyLog" class="btn">New</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td> ID </td> 
                                    <td> Date </td>  
                                    <td> Colour </td> 
                                    <td> Illness </td>
                                    <td> Home Isolation ID </td>
                                    <td> People Name </td>
                                    <td> Update </td>
                                    <td> Delete </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($dailyloglist as $dailylogas){
                                        echo "
                                            <tr>
                                                <td>$dailylogas->DLOGid</td>
                                                <td>$dailylogas->DLOGdate</td>
                                                <td>$dailylogas->DLOGcolour</td>
                                                <td>$dailylogas->DLOGillness</td>
                                                <td>$dailylogas->HIid</td>
                                                <td>$dailylogas->PPname</td>
                                                <td> <a class=abc href=?controller=DailyLog&action=updateForm&DLOGid=$dailylogas->DLOGid>
                                                  Update </a></td>
                                                <td> <a class=abc href=?controller=DailyLog&action=DeleteConfirm&DLOGid=$dailylogas->DLOGid>
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
	                fetch('https://api.countapi.xyz/update/yutthana/number2/?amount=1')
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