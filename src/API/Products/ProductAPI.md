# Hotel API

## 1.Get Products

### Method:GET

### API endpoint:

http://0.0.0.0:9021/api-products


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


## 2.Get Product

### Method:GET

### API endpoint:

http://0.0.0.0:9021/api-products/:id


````ts
export interface Products {
    status: string
    msg: string
    data:Data
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
## 3.Get Products With Product Type

### Method:GET

### API endpoint:

http://0.0.0.0:9021/api-products-type/:id


````ts
export interface Products {
    status: string
    msg: string
    data:Data
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
