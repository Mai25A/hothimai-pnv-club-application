<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/indexStyle.css">
    <title>Document</title>
</head>
<body>
    <form action="./result.php" method="post">
        <div class="ifor">  
            <div class="ifor_Name">
                <p>Name</p>
                <input type="text" name="name"></input>
            </div>
            <div class="clubb">
                <p>Club you want to apply</p>
                <select name="club" id="club">
                    <option value="Robotic Club">Robotic Club</option>
                    <option value="Art Club">Art Club</option>
                    <option value="Summer Club">Summer Club</option>
                    <option value="Football Club">Football Club</option>
                </select>
            </div>
        </div>
        <div class="timer">
            <p>Be time for you</p>
            <div class="timer_infor">
                <label>
                    <input type="radio" name="time" value="Saturday mornings" />Saturday mornings
                </label>
                <label>
                    <input type="radio" name="time" value="Saturday afternoons" />Saturday afternoons
                </label>
                <label>
                    <input type="radio" name="time" value="Sunday afternoons" />Sunday afternoons
                </label>
            </div>
        </div>
        <div class="skill" >
            <p>Yours Skills</p>
            <div class="skill_infor">
            <label>
            <input type="checkbox" name="skills[]" value="The best coder" />The best coder
            </label>
            <label>
                <input type="checkbox" name="skills[]" value="Good in arts" />Good in arts
            </label>
            <label>
                <input type="checkbox" name="skills[]" value="A super star" />A super star
            </label>
            <label>
                <input type="checkbox" name="skills[]" value="A crazy dancer" />A crazy dancer
            </label>
            <label>
                <input type="checkbox" name="skills[]" value=Singer />Singer
            </label>
            <label>
                <input type="checkbox" name="skills[]" value="Good in design" />Good in design
            </label>
            <label>
                <input type="checkbox" name="skills[]" value="The best eater" />The best eater
            </label>
            <label>
                <input type="checkbox" name="skills[]" value="Good in speeches" />Good in speeches
            </label>
            </div>
        </div>
        <div class="btn">
            <button id="submit" type="submit" value="Submit">Submit</button>
        </div>
    </form>
</body>
</html>