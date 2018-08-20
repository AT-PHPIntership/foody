## User Api
### `POST` Register
```
/api/register
```
Register user

#### Request Headers
| Key | Value |
|---|---|
|Accept|application/json

#### Query Param
| Key | Value | Description |
|---|---|---|
| username | text | Username |
| email | email | User's Email |
| password | password | User's Password |
| full_name | text | Full Name |
| gender | number | 0 for Male 1 for Female |
| phone | number | Phone |

#### Response
* _Error_
``` json
{
    "error": [
        "username": [
            "The username has already been taken."
        ],
        "email": [
            "The email has already been taken."
        ],
    ],
    "code": 422
}
```

* _Success_
``` json
{
    "result": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjJmZjIzMzRmM2Q3ZDg0ZWQxMWIyZWFjNmE5ZTVlNTNkMmE2NmI2YWRkMzY0NGIzNDlkMmZkMGQ3MmQzNTdiM2UyMmQ1MjEzYzM2ZjExM2JmIn0.eyJhdWQiOiIxIiwianRpIjoiMmZmMjMzNGYzZDdkODRlZDExYjJlYWM2YTllNWU1M2QyYTY2YjZhZGQzNjQ0YjM0OWQyZmQwZDcyZDM1N2IzZTIyZDUyMTNjMzZmMTEzYmYiLCJpYXQiOjE1Mjg4ODEwMDIsIm5iZiI6MTUyODg4MTAwMiwiZXhwIjoxNTYwNDE3MDAxLCJzdWIiOiIxOCIsInNjb3BlcyI6W119.i_7h910vahjYqrYKLrBV0foKZ3-D89vCqNYtzePbJXWka6doC8PsrQxsuRLIyN2pmTAuMtH8ypF3z9QR25z7QWOaV09QsHIyQcIvSPIMr4toXB4j9rfareH2xmtGFLsDH186b7iwsuDU-nCykzdgJnTiSLMfNKuk2bE4igMDc8czeytvf2Dp2fx2piMYyvrx3ShVbx1x3d-udF31zYJv8fQhls0Ez6lG4egBgv42Lnse585_P3smF10sD8olpqAoFc0YnZKxPBJnkK6JfigOPpI0mDNOfBTh97UGtpjqIsscr1hwp-qvAzdGw4Pzh9PcT8ABpJH6erQwK9xp9toGi6new-LGXTFacO_stv6bitawN5N9pXW7yazJVimPsHFoCrSCIfnVaBBqfw-JCZRaPM0oBwwEdHETepnzvF1SDAGjHFEU2b7VbOmB_bdM3yA-MCS-iGZ2rk_KwKGSzPm2jOwGIreSPG3RLyx4A2k6-JNxXxVsqvZqyLQM31q50x4YvTMwhOTuqY1S1bThxVABFN9-EWyuEslRS76dvY9B2k0p9T9WUH18D5V6ngcf3PC_WP56Wt0p8qNTdAgHw6GOllyOnMytxNmgO0I1LknXr4Lrm2oveI8Zivutsp3zfiQqg_NAhDeGlYKftmesFNrSArawUoLesZNfbQr1Y4Pz5jc",
        "user": {
            "id": 1,
            "username": "abcde",
            "full_name": "dfdfdfd dfdf",
            "birthday": "1996-11-16",
            "gender": 1,
            "phone": "01652637385",
            "email": "abc@abc.abcde",
            "role_id": 3,
            "is_active": 1,
            "updated_at": "2018-06-13 09:10:01",
            "created_at": "2018-06-13 09:10:01",
        }
    },
    "code": 200,
}
```
