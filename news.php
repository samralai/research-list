<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Project List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Project List</label>
<?php
session_start();
$id = $_SESSION['id'];
echo "<ul>
        <li><a href='./'>Home</a></li>
        <li><a href='projects.php'>Projects</a></li>
        <li><a class='active' href='news.php'>News</a></li>";
if(is_null($id)) {
  echo "<li><a href='login.html'>SignIn</a></li>
  <li><a href='signup.html'>SignUp</a></li>";
} else {
  echo "<li><a href='myprofile.php'>My Profile</a></li>
  <li><a href='utility/logout.php'>Log Out</a></li>";
}
?>
      </ul>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="my-container">
            <h1>Juice Balls: The Science of Spherification</h1>
            <img src="https://images-ext-1.discordapp.net/external/Jx1Px3DURBmdUp_MTuHBDWUoSmUwE7BtjlJ5hdO6UiI/https/www.ohnuts.com/noapp/showImage.cfm/extra-large/Orange-Sours1.jpg">
          </div></br>
          <article>
            <p>Did you know that you can turn just about any drink or pureed food into small spheres? The spheres have a gelatinous outside with a liquid center. Molecular gastronomy is the area of food science that explores how to make these spheres, as well as other ways ingredients in our food are physically and chemically changed when we prepare and cook it. In other words, molecular gastronomy looks at the molecules in our food and how they change. (Gastronomy is the study of picking, preparing, and eating good food.) The molecular gastronomy technique that is used to make food into spheres has a fitting name: spherification. </p>
            <p>When doing spherification with food, the food is typically a liquid or has a liquid-like consistency (such as fruit juice, soda, pudding, soup, or pureed fruit). The food is mixed with sodium alginate in a blender to make a smooth solution. Then, the food and sodium alginate solution is added, one drop at a time, to a solution of calcium chloride (in water). If everything goes right, the food and sodium alginate solution turns into small (drop-size) spheres as it comes into contact with the calcium chloride. The spheres can then be removed from the calcium chloride solution (using a spoon) and eaten!</p>
            <hr>Materials and Equipment</hr>
            <ul>
              <li>60 cc plastic syringe</li>
              <li>Sodium alginate (2 grams)</li>
              <li>Calcium chloride (2 grams)</li>
              <li>Sodium citrate (10 grams)</li>
              <li>Cold tap water</li>
              <li>Liquid measuring cups</li>
              <li>Sodium citrate (10 grams)</li>
              <li>Bowl that can hold at least 1 </li>
              <li>Digital scale with 0.1 g increments.</li>
              <li>Wax paper (1 sheet) </li>
              <li>Blender, large or small </li>
              <li>Small cup or bowl that can hold at least 1/4 C   </li>
              <li>Graph paper (1 or 2 sheets) with lines that    are 1 mm </li>
            </ul>
            <hr>Experimental Procedure</hr>
            <ol>
              <li> Make the calcium chloride solution.</li>
              <li> Add 1 cup (C) of water to a new, clean bowl.   </li>
              <li>Add 2.0 grams (g) of calcium chloride to the bowl. </li>
              <li>Cut a small piece of wax paper (around 8–10 centimeters [cm] on each side), place the wax paper on the scale, zero out the scale (so that it reads "0 g"), and then weigh out the chemical on the wax paper. Use a clean spoon to scoop the chemicals out of their containers. </li>
              <li> Be sure to use a fresh piece of wax paper so no leftover calcium chloride contaminates your solution.</li>
              <li> Stir the bowl using a clean spoon until the calcium chloride has completely dissolved.</li>
              <li> Place a small piece of plastic wrap on a sheet of graph paper (for measuring the balls' diameters). </li>
              <li> In the cup part of a blender, add 1/2 C of the cold food.</li>
              <li> Add another 1/2 C of the cold food to the blender cup.</li>
              <li>Adding the rest of the food now should help mix the sodium alginate and food a little. </li>
              <li> You might want to ask an adult to help you use the blender to blend the food and sodium alginate together until the solution is completely smooth and well-blended.</li>
              <li> Secure the blender cup lid tightly before blending so that nothing gets spilled. </li>
            </ol>
          </article>
          <div class="my-container">
            <h1>What Makes Ice Melt Fastest?</h1>
            <img src="https://images-ext-2.discordapp.net/external/kgZ8t67gdpCh2mmMxVhtLsbX9h97-PeB66npj8TWrFY/%3Fheight%3D953%26width%3D1255/https/sites.google.com/site/whatmakesicemeltfasterstem/_/rsrc/1386291325698/home/581845029-1uku734.jpg?width=905&height=687">
          </div></br>
          <article>
            <p>If you have ever made homemade ice cream the old-fashioned way using a hand-crank machine, you probably know that you need ice and rock salt to make the cream mixture cold enough to freeze. Similarly, if you live in a cold climate, you have seen the trucks that salt and sand the streets after a snowfall to prevent ice from building up on the roads. In both of these instances, salt is acting to lower the freezing point of water, and changing what phase of matter the water is (i.e., turning solid ice into liquid water). </p>
            <p>Table salt (technically sodium chloride, or NaCl) when mixed with water is an example of a chemical solution. In a solution, there is a solvent (the water in this example), and a solute (the salt in this example). A molecule of the solute dissolves (goes into solution) because the force of attraction between the solute molecule and the solvent molecules is greater than the force of attraction between the molecules of the solute. Water (H2O) is a good solvent because it is partially polarized. (This polarization is caused by the distribution of electrons in the water molecule; specifically, its hydrogen ends have a partial positive charge, and the oxygen end has a partial negative charge.) Because water molecules are partially polarized, it is possible for them to arrange themselves around ions (which are molecules or atoms that have a charge), like the sodium (Na+) and chloride (Cl-) ions that make up table salt. This is why there is a greater attraction between the water molecules and the molecules of salt than there is between the molecules of salt by themselves, and why the water can dissolve the salt to create a salty solution.This is an example of a colligative property. In this science project, you will investigate different substances to see how they affect the rate at which ice cubes melt.</p>
            <hr>Materials and Equipment</hr>
            <ul>
              <li>Identical bowls or saucers (4)</li>
              <li>Ice cubes (12). They should all be the same   size and shape.</li>
              <li>Salt (¾ tsp.)</li>
              <li>Sugar (¾ tsp.)</li>
              <li>Sand (¾ tsp.)</li>
              <li>¼ teaspoon measuring spoon</li>
              <li>Refrigerator</li>
              <li>50 mL graduated cylinder, or smaller size.       </li>
              <li>Large cup with a spout, such as some measuring  cups.</li>
              <li>Alternatively you could use a funnel that fits in the graduated cylinder. </li>
            </ul>
            <hr>Experimental Procedure</hr>
            <ol>
              <li> Get the salt, sugar, sand, and measuring teaspoon ready to use nearby.</li>
              <li> Into each of the four bowls, quickly place three ice cubes.</li>
              <li>Three similarly sized ice cubes placed in a bowl and arranged to make a triangle</li>
              <li>Carefully sprinkle ½ teaspoon (tsp.) of salt over the ice cubes in one bowl. Then sprinkle ½ tsp. of sugar over the ice cubes in another bowl, and ½ tsp. of sand over the ice cubes in the third bowl. Do not sprinkle anything over the ice cubes in the fourth bowl.</li>
              <li> Move each bowl to an empty shelf in the   refrigerator. If any of the ice cubes no longer form a  triangular shape in their bowl, gently nudge the ice  cubes to make a triangle again.
              </li>
                <li> Carefully pour the liquid water from one of the   bowls into a cup with a spout, such as a large       measuring cup.</li>
                <li> Now let the ice cubes completely melt in their   bowls (you can leave them at room temperature).    </li>
                <li> Calculate the total amount of water (originally   in ice cube form) that was in each bowl.   </li>
                <li> For example, if the amount melted was 65 mL and   the amount remaining was 25 mL, the total amount    would be 90 mL.
                <li>Calculate the percentage of ice that was melted   (when you first took the bowls out of the      refrigerator) for each bowl. Do this by dividing the     amount melted by the total amount.</li>
                <li>Adding the rest of the food now should help mix   the sodium alginate and food a little. </li>
                <li> You might want to ask an adult to help you use   the blender to blend the food and sodium alginate     together until the solution is completely smooth and   well-blended.</li>
                <li> Clean out and dry the bowls. Then repeat steps   1–11 at least two more times so that you have done     at least three trials total.
              </li>
            </ol>
          </article>
          <div class="my-container">
            <h1>Chemistry of Ice-Cream Making: Lowering the Freezing Point of Water</h1>
            <img src="https://images-ext-1.discordapp.net/external/C7y2N9uP4KkyUBy05vr8tLEPFlx_KuxGylmQNK9ddbU/https/i.tmgrup.com.tr/sfr/2013/10/07/Orjinal/559181920036.jpg?width=350&height=687">
          </div></br>
          <article>
            <p>If you live in a cold climate, you may also have seen trucks spreading salt or sand on the streets to prevent roads from getting icy after a snowfall. This is because the salt lowers the temperature at which water freezes, so ice can melt even when the temperature is below the normal freezing point of water. </p>
            <p>In both cases, salt is used to lower the temperature at which water freezes, a temperature called the freezing point. The decrease in freezing point that happens when salt is added to water is called freezing point depression. Pure water freezes at 0° Celsius (C), but water mixed with salt freezes at less than 0° C.</p>
            <p>Freezing point depression is not unique to water and salt; it happens with all solutions. To make a solution, you dissolve a solute in a solvent. The solvent does the dissolving, and the solute is the thing that is dissolved. In this science project, you will use water as the solvent and sodium chloride (table salt) and sucrose (granulated sugar) as the solutes.</p>
            <hr>Materials and Equipment</hr>
            <ul>
              <li>Test tubes, 16 millimeters (mm) by 150 mm (7)     </li>
              <li>Test tube rack</li>
              <li>250 mL beakers (6)</li>
              <li>100 mL graduated cylinder</li>
              <li>Gram balance, accurate to 0.1 grams</li>
              <li>Thermometer, minimum range −10°C</li>
              <li>Stir rods (2)</li>
              <li>Cup (12 ounces [oz] or more)</li>
              <li>Water</li>
              <li>Ice</li>
              <li>Table or sea salt (sodium chloride, NaCl) (500 g   or 18 oz)</li>
              <li>Granulated sugar (sucrose) (360 g or 13 oz)</li>
              <li>Small spoon or scoop, for scooping up salt and     sugar</li>
            </ul>
            <hr>Experimental Procedure</hr>
            <ol>
              <li>Fill the Styrofoam cup ¾ full with ice and cover   the ice with ¼–½ inches of table or sea salt.</li>
              <li>Stir this ice-salt mixture with a spoon or   stirring rod.</li>
              <li>Use the thermometer to check the temperature of the ice-salt mixture. It should be close to −10°C.       </li>
              <li>You will use this ice bath to freeze several test liquids. During the course of your experiments, you may need to pour melted water out of the ice bath and replenish the ice and salt. When you do this, wait until the temperature of the ice bath drops again to about −10°C before continuing your experiment.</li>
              <li> Check the temperature of the ice bath before freezing each of your test liquids.</li>
              <li>Always carefully rinse and dry the thermometer before using it to measure the freezing point of your test liquids. You do not want the thermometer to carry salt water into your test liquids!</li>
            </ol>
          </article></br></br></br></br></br></br></br></br></br></br>
        </div>
      </div>
    </div>
    <footer>
    <a href="https://www.bilgi.edu.tr/tr/">
      <img class="logos" src="img/bilgilogo.png" style="max-width:10%;height: auto;" alt="altlab" title="altlab" align="left"/></a>
    </footer>
  </body>
</html>