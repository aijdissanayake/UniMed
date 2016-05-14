<html>
    <head>
    </head>
    <body>
        <h2></h2>
        <table border = 7px>
<!--            <tr>
                <td>
                    id
                </td>
                <td>
                    user_id
                </td>
                <td>
                    first name
                </td>
                <td>
                    last name
                </td>
                <td>
                    gender
                </td>
                <td>
                    birthYear
                </td>
                <td>
                    blood Group
                </td>
                <td>
                    locale
                </td>
                <td>
                    telephone number
                </td>
                <td>
                    has appointment?
                </td>
                <td>
                    has left
                </td>
            </tr>-->
            @foreach ($patients as $input)
            <tr>
                <td>
                    {{$input->lastName}};
                </td>
            </tr>
            
            @endforeach
        </table>
        
    </body>
</html>
