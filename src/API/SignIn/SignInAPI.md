## 1.user login

### Method:Post

### API endpoint:

http://0.0.0.0:9021/api-login


## header

param | type | description
--- | --- | ---
token | string |

#### Param

param | type | description
--- | --- | ---
Email | text | 
Password | text | 
##response
````ts
export interface Products {
    status: string
    msg: string
    data: Data[]
    code: number
}

export interface Data {
    id: string
    tenSanPham: string
    giaSanPham: string
    hinhAnhSanPham: string
    moTaSanPham: string
    idLoaiSanPham: string
}
````
1
