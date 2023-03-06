<html>

<head>

    <title>

        lab2

    </title>

</head>

<body>
<header>
    <img alt="logo" src="https://iq2u.ru/upload/blog_files/2022/10/12/13/32/8TOmy3/Mospolite.png" width="327">
    <h1 style="text-align: center">Feedback Form(Lab2)</h1>
</header>
<main>
    <form action="//httpbin.org/post" method="post" name="contacts_info" autocomplete="on">
        <fieldset class="fieldset">
            <legend class="title_form">
                <h2>Contact us</h2>
            </legend>

            <!--      Имя      -->
            <label style="display: flex; margin: 20px">
                <span>Your name</span>
                <input type="text" placeholder="your name" name="name" required style="margin-left: 10px">
            </label>
            <!--      Почта      -->
            <label class="forms_name" style="display: flex; margin: 20px">
                <span>Your email</span>
                <input type="email" placeholder="email" name="email" style="margin-left: 10px">
            </label>
            <!--      Тип обращения      -->
            <label style="display: flex; margin: 20px">
                <span>Type of appeal</span>
                <select name="appeal_type" style="margin-left: 10px">
                    <option value="complaint">Complaint</option>
                    <option value="proposal">Proposal</option>
                    <option value="gratitude">Gratitude</option>
                </select>
            </label>
            <!--       Текст обращения    -->
            <label style="display: flex; flex-direction: column; margin: 20px">
                <span>The text of the appeal</span>
                <textarea placeholder="Some text..." name="appeal_text" required style="margin-top: 10px"></textarea>
            </label>
            <!--      Вариант ответа      -->
            <div style="margin: 20px 0px 0px 20px">
                <p>Answer option:</p>
                <div style="display: flex; flex-direction: column">
                    <label>
                        <input type="checkbox" name="Answer_option" value="SMS">
                        <span>SMS</span>
                    </label>

                    <label class="forms_name custom-checkbox">
                        <input type="checkbox" name="Answer_option" value="EMAIL">
                        <span>EMAIL</span>
                    </label>
                </div>
            </div>
        </fieldset>

        <div style="margin-top: 20px">
            <button type="submit">Submit</button>
            <button type="reset" >Reset</button>
        </div>

    </form>
    <a href="lab2.2.php">Get Headers</a>
</main>
<footer>
    <p style="text-align: center; font-size: 40px">Выполнил Брянцев Александр</p>
</footer>
</body>

</html>
