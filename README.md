# Ceicom_UploadCustAttribute
============================

## Description

**Add** attribute for sending files customer register

## Installation

**Send** the 'app' folder to the root of the magento installation

## After installation

**Add** the input file to the registration files

## Code

```
<li id="uploadcustomer">
    <label for="upload_customer" class="required"><em>*</em><?php echo $this->__('File Upload') ?></label>
    <div class="input-box">
            <input type="file" name="upload_customer" id="upload_customer" title="<?php echo $this->__('File Upload') ?>" class="required-entry input-text" />
    </div>
</li>
```

## Authors

* **Jonatan Machado* - *Initial work* - [Git Jonatan](https://github.com/JonatanM)
* **Ceicom* - [ceicom.com.br](http://www.ceicom.com.br/)

## License

This project is licensed Open Software - see the [Open Software License (OSL 3.0)](http://opensource.org/licenses/osl-3.0.php) link for details

