## Product Api

### `GET` List Newest products
```
/api/products/show-newest?number_products={number_products}
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
            "id": 7,
            "name": "Eulalia Bernhard",
            "describe": 1,
            "price": "2018-05-31 07:04:58",
            "store_id": 7,
            "category": 2,
            "store": {
                "id": 7,
                "name": "Eulalia Bernhard",
                "describe": 1,
                "price": 10000,
                "store": "Purdy",
            },
            "images": [
                {
                    "id": 2,
                    "path": "img1.jpg",
                    "product_id": 7,
                    "created_at": "2018-05-31 07:04:58",
                    "updated_at": "2018-05-31 07:04:58",
                    "deleted_at": null
                },
                {
                    "id": 3,
                    "path": "img3.jpg",
                    "product_id",
                    "created_at": "2018-05-31 07:04:58",
                    "updated_at": "2018-05-31 07:04:58",
                    "deleted_at": null
                }
                    
            ],
            "created_at": "2018-05-31 07:04:58",
            "updated_at": "2018-05-31 07:04:58",
            "deleted_at": null,
        },
    ],
    "code": 200
}
```