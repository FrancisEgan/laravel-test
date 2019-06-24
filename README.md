# Iversoft Test App
> Web CRUD interface and CRUD API endpoints for simple DB

## Installation

Make sure to install NPM and composer packages

## API Endpoints

API endpoints are the same for all objects. Their routes are /api/users, /api/user_roles, /api/user_addresses

Note: For update, send body as `x-www-form-urlencoded`

### Create:
POST /api/users
* accepts db fields for user
* creates user and stores
* returns user

### Read:
GET /api/users
* returns all users

GET /api/users/{id}
* URL contains id of user
* returns user matching id

### Update:
PUT /api/users/{id}
* URL contains id of user
* accepts db fields for user
* updates user in db
* returns user

### Delete
DELETE /api/users/{id}
* URL contains id of user
* deletes user
* returns 204 no content

## Design Decisions
* Generalized templates used so templates didn't need to be copied for all objects
* Display fields for different templates are defined in object models
* Used twitter bootstrap for theme