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

  # 数据迁移目录配置，必填，可选值见「数据迁移目录配置说明」
  QSCMF_CHINESE_REGION_MIGRATION_DIR=
  ```

  `QSCMF_CHINESE_REGION_TABLE_NAME` 需配合项目 Laravel `DB_PREFIX` 配置，使拼出的物理表名与库里一致：

  | 项目 DB_PREFIX | env 填值 | 物理表 |
  |----------------|----------|--------|
  | `''`           | `qs_area`| qs_area |
  | `qs_`          | `area`   | qs_area |

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
##### *若有删除地区，需要维护 deprecation-log.json 文件来警告*

#### 工具类说明

[MigrationCommon](./src/docs/MigrationCommon.md)
