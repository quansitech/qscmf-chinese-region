# quansitech/qscmf-chinese-region

```text
用于维护中国省市区数据
```

#### 安装

```php
composer require quansitech/qscmf-chinese-region
```

#### 用法
+ 设置ENV
  ```ENV
  # 存储地区数据的数据表名，必填
  QSCMF_CHINESE_REGION_TABLE_NAME=
  
  # 数据迁移目录配置，必填，具体用法看数据迁移目录配置说明
  QSCMF_CHINESE_REGION_MIGRATION_DIR=
  ``` 
  
+ 同步数据
  自动执行数据迁移来更新数据


#### 数据迁移目录配置说明
```text
不同的系统所使用的地区数据结构不一样，所以需要配置数据迁移目录
```

+ 目录名称
  - `three`：三层数据，省市区
  - `four`：四层数据，省市区乡镇

##### *开发时需要根据不同的数据迁移目录来创建不同的迁移文件*

#### 工具类说明
[MigrationCommon](./src/docs/MigrationCommon.md)


