<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Backend for Hospital Patient Management System
Backend for Hospital Patient Management System
## Endpoints

List of Available Endpoints:

- `GET /api/v1/patients`
- `POST /api/v1/patients`
- `PUT /api/v1/patients/:id`
- `GET /api/v1/patients/`
- `DELETE /animeplaylist/`


### GET /api/v1/patients/

#### Description

- Get all patients data

#### Response

_200 - OK_

```json
{
    "data": [
        {
            "id": Integer,
            "nik": String,
            "name": String,
            "sex": String,
            "religion": String,
            "phone": String,
            "address": String
        },
        ...  
    ]
}

```


### POST /api/v1/patients


#### Description

- Create new data patient 

#### Request

- Body

  ```json
    {
    "nik" : String,
    "name" : String,
    "sex" : String,
    "religion" : String,
    "phone" : String,
    "address" : String
    }
  ```
- Headers

  ```json
    {
    "Accept" : "application/json",
    "Content-Type" : "application/json"
    }
  ```

#### Response

_200 - OK_

```json
"Patient Created"
```


### PUT /api/v1/patients/:id


#### Description

- Edit data patient 

#### Request

- Params

  ```json
    {
    "id" : Integer
    }
  ```

- Body

  ```json
    {
    "nik" : String,
    "name" : String,
    "sex" : String,
    "religion" : String,
    "phone" : String,
    "address" : String
    }
  ```
- Headers

  ```json
    {
    "Accept" : "application/json",
    "Content-Type" : "application/json"
    }
  ```

#### Response

_200 - OK_

```json
"Patient Updated"
```


### GET /api/v1/patients/:id


#### Description

- Get detail data patient by id

#### Request

- Params

  ```json
    {
    "id" : Integer
    }
  ```
  ```
- Headers

  ```json
    {
    "Accept" : "application/json",
    "Content-Type" : "application/json"
    }
  ```

#### Response

_200 - OK_

```json
{
    "data": {
            "id": Integer,
            "nik": String,
            "name": String,
            "sex": String,
            "religion": String,
            "phone": String,
            "address": String
            }
}
```


### DELETE /api/v1/patients/:id

#### Description

- Delete data patient by id

#### Request

- Headers
  ```json
  {
    "Accept" : "application/json",
    "Content-Type" : "application/json"
  }
  ```
- Params
  ```json
  {
    "id" : Integer
  }
  ```
#### Response

_200 - OK_

```json
"Patient Deleted"
```
