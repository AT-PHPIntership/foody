## Product Api

### `GET` List Newest products
```
/api/products/newest-products-{number_products}
```
Get list newest products with limited items
#### Request Headers
| Key | Value |
|---|---|
|Accept|application/json

#### Response
```json
{
    "result": [
        {
            "number_products": 2,
            "products": [
                {
                    "id": 7,
                    "name": "Eulalia Bernhard",
                    "describe": 1,
                    "price": "2018-05-31 07:04:58",
                    "store": [
                        {
                            "id": 7,
                            "name": "Eulalia Bernhard",
                            "describe": 1,
                            "price": 10000,
                            "store": "Purdy",
                        },
                    ],
                    "images": [
                        {
                            "id": 2,
                            "path": "img1.jpg",
                        },
                        {
                            "id": 3,
                            "path": "img3.jpg",
                        }
                            
                    ],
                    "created_at": "2018-05-31 07:04:58",
                    "updated_at": "2018-05-31 07:04:58",
                    "deleted_at": null,
                },
                {
                    "id": 8,
                    "name": "Eulalia",
                    "describe": 1,
                    "price": "2018-05-31 07:04:58",
                    "store": [
                        {
                            "id": 7,
                            "name": "Eulalia Bernhard",
                            "describe": 1,
                            "price": 10000,
                            "store": "Purdy",
                        },
                    ],
                    "images": [
                        {
                            "id": 4,
                            "path": "img1.jpg",
                        },
                        {
                            "id": 5,
                            "path": "img3.jpg",
                        }
                            
                    ],
                    "created_at": "2018-05-31 07:04:58",
                    "updated_at": "2018-05-31 07:04:58",
                    "deleted_at": null,
                },
            ]
        },
    ],
    "code": 200
}
```