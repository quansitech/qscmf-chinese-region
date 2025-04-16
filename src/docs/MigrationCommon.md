## MigrationCommon

```text
数据迁移工具类
```

### 函数介绍

#### `getTableName`
```text
获取数据表名
```

```php
MigrationCommon::getTableName();
```

#### `isProduction()`
```text
检查当前是否为生产环境
```

```php
MigrationCommon::isProduction();
```

#### `delCity`
```text
根据城市 ID 删除城市及相关数据
```

```php
MigrationCommon::delCity(123456);
```

| 参数名称    | 类型  | 是否必填 | 备注   |
|---------|-----|------|------|
| id      | int | 是    | 地区编号 |

