<?php include("incl/header.php"); ?>
 <div>
            <form action=" http://voyager.lnu.se/tekinet/kurser/dtt/wp_webbintro/form.php" method="post">
                
                <fieldset>
                    <legend>Ärende</legend>
                    <div>
                    <label for="request">Ärendetyp</label>
                    <select id="request" name="request">
                        <option value="Fråga" selected>Fråga</option>
                        <option value="Kommentar">Kommentar</option>
                        <option value="Övrigt">Övrigt</option>
                    </select></div>
                    
                    <div><label for="rubrik">Rubrik:</label>
                    <input type="text" id="rubrik" placeholder="Din rubrik" name="rubrik"/></div>
                    <div><label for="question">Fråga:</label>
                    <textarea rows="5" cols="10" name="question" id="question" placeholder="Din fråga här"></textarea></div>
                    
                </fieldset>
                <fieldset>
                    <legend>Information om dig</legend>
                    
                    
                    <div><input type="radio" name="kontaktvia" value="mail" id="mail" /> <label for="mail">Kontakta mig via mail</label></div>
                     <div><input type="radio" name="kontaktvia" value="tel" id="tel" /> <label for="tel">Kontakta mig via telefon</label></div>
                     <p>Jag är tillgänglig dessa dagar:</p>
                     <input type="checkbox" name="kontaktdagar[]" value="mandag" id="man" /> <label for="man">Måndag</label><br>
                     <input type="checkbox" name="kontaktdagar[]" value="tisdag" id="tis" /> <label for="tis">Tisdag</label><br>
                     <input type="checkbox" name="kontaktdagar[]" value="onsdag" id="ons" /> <label for="ons">Onsdag</label><br>
                     <input type="checkbox" name="kontaktdagar[]" value="torsdag" id="tors" /> <label for="tors">Torsdag</label><br>
                     <input type="checkbox" name="kontaktdagar[]" value="fredag" id="fre" /> <label for="fre">Fredag</label><br>
                     <input type="checkbox" name="kontaktdagar[]" value="lordag" id="lor" /> <label for="lor">Lördag</label><br>
                     <input type="checkbox" name="kontaktdagar[]" value="sondag" id="son" /> <label for="son">Söndag</label><br>
                    
                    
                </fieldset>
                
                <input type="submit" value="Skicka!"/>
                
            </form>   
            
        </div>
        


<?php include("incl/footer.php"); ?>