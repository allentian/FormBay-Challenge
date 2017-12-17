# Code challenge from FormBay

## Create an HTTP API service with which you can:

1. List all records.
2. Get a single record by id.
3. Full-text search by name.

## Build

Go to repo folder, run docker-compose to build two containers: app and Mysql

```docker-compose up -d --build```

## About code

Implemented by Yii2 framework/MySQL/docker.
Based on your requirement, company table contains id, name, description, founded, createdAt and updatedAt fields.I configured the version control/route and implemented token-based authentication, company model and controller.

## Test with postman

```
List all records.
```
GET  formbay.test/v1/companies

Header:  access-token   RjYfaFxsJQ2bC7orZUF6K3M9vCEzJ_dx
```
Expected result:
```
[
    {
        "id": 1,
        "name": "FormBay",
        "description": "FormBay is a small SaaS startup entering the market for electronic document workflows.",
        "founded": 2010
    },
    {
        "id": 2,
        "name": "Google",
        "description": "Google LLC is an American multinational technology company that specializes in Internet-related services and products. ",
        "founded": 1998
    },
    {
        "id": 3,
        "name": "Facebook",
        "description": "Facebook is an American for-profit corporation and an online social media and social networking service based in Menlo Park, California.",
        "founded": 2004
    },
    {
        "id": 4,
        "name": "Amazon",
        "description": "Amazon.com, Inc., doing business as Amazon, is an American electronic commerce and cloud computing company based in Seattle, Washington ",
        "founded": 1994
    }
]
```
Get a single record by id.
```
GET formbay.test/v1/companies/{id}

Header:  access-token   RjYfaFxsJQ2bC7orZUF6K3M9vCEzJ_dx
```
Sample:
```
GET formbay.test/v1/companies/1

Header:  access-token   RjYfaFxsJQ2bC7orZUF6K3M9vCEzJ_dx
```
Expected result:
```
[
    {
        "id": 1,
        "name": "FormBay",
        "description": "FormBay is a small SaaS startup entering the market for electronic document workflows.",
        "founded": 2010
    }
]
```
```
GET formbay.test/v1/companies/10

Header:  access-token   RjYfaFxsJQ2bC7orZUF6K3M9vCEzJ_dx
```
Expected result:

``` 
{
    "name": "Not Found",
    "message": "Object not found: 10",
    "code": 0,
    "status": 404,
    "type": "yii\\web\\NotFoundHttpException"
}
```
Full-text search by name.
```
GET formbay.test/v1/companies/search?name={search_string}

Header:  access-token   RjYfaFxsJQ2bC7orZUF6K3M9vCEzJ_dx
```
Sample:
```
GET formbay.test/v1/companies/search?name=formBay

Header:  access-token   RjYfaFxsJQ2bC7orZUF6K3M9vCEzJ_dx
```
Expected result:
```
[
    {
        "id": 1,
        "name": "FormBay",
        "description": "FormBay is a small SaaS startup entering the market for electronic document workflows.",
        "founded": 2010
    }
]
```    
```    
GET formbay.test/v1/companies/search?name=aaa

Header:  access-token   RjYfaFxsJQ2bC7orZUF6K3M9vCEzJ_dx
```
Expected result:
```
[]
```
Test Authentication
```
GET  formbay.test/v1/companies
```
Expected result:
{
    "name": "Unauthorized",
    "message": "Your request was made with invalid credentials.",
    "code": 0,
    "status": 401,
    "type": "yii\\web\\UnauthorizedHttpException"
}