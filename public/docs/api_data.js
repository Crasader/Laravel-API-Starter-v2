define({ "api": [
  {
    "group": "Authentication",
    "name": "RegisterUser",
    "type": "post",
    "url": "/api/auth/register",
    "title": "Register User",
    "description": "<p>Register a new artist or patron</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>the complete name of the user</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>unique email of the user</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>at least 6 characters</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role",
            "description": "<p>artist | patron</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "{ \"status\": \"ok\"}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Api/V1/Authentication/Controllers/RegisterController.php",
    "groupTitle": "Authentication"
  },
  {
    "group": "Authentication",
    "name": "loginUser",
    "type": "post",
    "url": "/api/auth/login",
    "title": "Login User (Email)",
    "description": "<p>Logging in users via api endpoint.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>unique email of the user</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>at least 6 characters</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "                {\n\"status\": \"ok\",\n\"token\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vYXBpLnlveW9naS5vby9hcGkvYXV0aC9sb2dpbiIsImlhdCI6MTUyNzY3ODg2NiwiZXhwIjoxNTI3NjgyNDY2LCJuYmYiOjE1Mjc2Nzg4NjYsImp0aSI6IklmdlpQbHIwcGJoUGFlcEoiLCJzdWIiOjMsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.xXrwVH9ggT1gx1iir6pXT8Jd0Tyw6Q1PIFK4VICSq8Q\",\n\"expires_in\": 3600,\n\"id\": 3,\n\"name\": \"test\",\n\"role\": null\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "examples": [
        {
          "title": "Error-Response:",
          "content": "                {\n\"status\": \"error\",\n\"message\": \"403 Forbidden\",\n\"status_code\": 403\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Api/V1/Authentication/Controllers/LoginController.php",
    "groupTitle": "Authentication"
  }
] });
