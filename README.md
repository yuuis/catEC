# cat ec
  ec site only for cat supplies.
  made in university lesson.

## set up
```bash
$ composer install
$ php artisan migrate --seed
$ php artisan serve
```

## models
  * `product`
    * name
    * price
    * image
    * description
  * `user`
    * name
    * email
    * phone number
    * address    
  * `administrator`
    * password
  * `purchase`
    * user
    * product

## screen transition diagram
![screen transition diagram](https://user-images.githubusercontent.com/31527437/47481431-8ab63800-d86e-11e8-84c5-bdf7aeff1a19.png)
