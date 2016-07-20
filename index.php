<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title>курс по Javascript</title>
</head>
<body>
<div>
    <script type="text/javascript">
        //?? ????????
        document.write("<p>?????- ?? ????????? <strong>'javascript\"</strong></p>");
        var price;
        price = 500;
        var name = "Ivan";
        document.write(name);
        price = 200;
        //lesson10
        var appleCount = 45, orangeCount = 67, totalFruit;
        totalFruit = appleCount + orangeCount;
        document.write('<p>' + totalFruit + '</p>');
        //lesson 11
        var count = 32;
        count += 16;
        document.write("<p>" + count + "</p>");
        //home lesson
        var days = 365, planet = "?????", peopleCount = "7 ", sun = "?????";
        document.write("?? ?????? ?? ?????? " + planet + ", ???? ?????? ???? ????? ??????? " + sun + " ?? " + days + " ???.<br>");
        //array(11)
        var days = ["????????", "???????", "??????", "??????"];
        document.write(days + "<br>");
        var myArray = [6, "????", 54, "????"];
        var number = 3;
        document.write(days[number] + "<br>");
        var cities = new Array('???', '????', '???????');
        var cities2 = new Array(5);
        //home array
        var country = ["??????", "???", "?????", "????????"];
        var popul = [48, 150, 300, 50];
        var i = 0;
        document.write(country[i] + " - ?????????: " + popul[i] + "???. ??????.<br>");
        //lesson 13
        var count = days.length;
        document.write("??????? ???????? ? ?????: " + count + "<br>");
        var students = ["вася", "маша", "петя", "пантелійович", "арсен"];
        document.write(students + "<br>");
        students.push("????");
        document.write(students + "<br>");
        document.write("??????? ???????? ? ?????: " + students.length + ". ?????? - " + students[5] + "<br>");
        students.unshift("?????");
        document.write("?????? ??????? ? ?????: " + students[0] + ". ?????? - " + students[0] + "<br>");
        students.pop();
        document.write("??????? ??????? ? ?????: " + students[students.length - 1] + ". ?????????? ????????" + "<br>");
        students.shift();
        document.write("?????? ??????? ? ?????: " + students[0] + ". ??????? ???????? <br>");
        //lesson 14 array method splice
        students.splice(3, 1);
        document.write(students + "<br>");
        students.splice(2, 0, "петро", "максим");
        document.write(students + "<br>");
        students.splice(1, 2, "леся", "оля");
        document.write(students + "<br>");
        //lesson15 methods of arrays
        document.write(students.reverse() + "<br>");
        document.write(students.sort() + "<br>");
        document.write(students.join("&") + "<br>");
        var students2 = ["надя", "таня"];
        document.write(students.concat(students2) + "<br>");
        document.write(students.slice(2, 4) + "<br><br>");
        //lessons 17 умовні оператори
        var pogoda = "ясно";
        if (pogoda == "ясно") {
            document.write("Ура! ми їдемо на пляж" + "<br>");
        }
        else {
            document.write("Будемо сидіти дома");
        }
        var count = 50;
        if (count <= 10) {
            document.write("Змінна count менше або рівно десяти");
        }
        else {
            document.write("Змінна count більше десяти");
        }
        //lessons 18 copulative condition
        var pogoda = "ясно";
        var car = "да";
        if (pogoda == "ясно" && car == "да") {
            document.write("Ура! ми їдемо на пляж" + "<br>");
        }
        else {
            document.write("Будемо сидіти дома");
        }
        var friend = "паша";
        if (friend == "саша" || friend == "паша") {
            document.write("Ура! ми їдемо на пляж" + "<br>");
        }
        else {
            document.write("Будемо сидіти дома");
        }
        //20
        friend = true;
        if (friend) {
            document.write("+<br><br>");
        }
        else {
            document.write("-<br><br>");
        }
        //20 cycle while
        var i=1;
        while (i<=2) {
            document.write(i+"<br>");
            i++;
        }
        var i=0;
        while (i<students.length) {
            document.write(students[i]+"<br>");
            i++;
        }
        //home work for 22 lesson
        document.write(students.slice(2,4)+"<br>");
        var i=2;
                while (i<4) {
            document.write(students[i]+"<br>");
            i++;
        }
        //23 cycle for
        document.write("урок №22 цикл for:<br>");
        for (var i=0;i<students.length;i++){
            document.write(students[i]+"<br>");
        }
        //home work
        for (var i=1;i<8;i++){
            document.write("квадрат "+i+" дорівнює "+i*i+"<br>")
        }
    </script>
</div>
</body>
</html>