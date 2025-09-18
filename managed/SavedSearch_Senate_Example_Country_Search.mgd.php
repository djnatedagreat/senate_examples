<?php
use CRM_Examples_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Senate_Example_Country_Search',
    'entity' => 'SavedSearch',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Senate_Example_Country_Search',
        'label' => E::ts('Example Country Search'),
        'api_entity' => 'Country',
        'api_params' => [
          'version' => 4,
          'select' => [
            'COUNT(id) AS COUNT_id',
            'name',
            'GROUP_CONCAT(DISTINCT is_active) AS GROUP_CONCAT_is_active',
            'GROUP_CONCAT(DISTINCT Country_StateProvince_country_id_01.name) AS GROUP_CONCAT_Country_StateProvince_country_id_01_name',
          ],
          'orderBy' => [],
          'where' => [],
          'groupBy' => ['name'],
          'join' => [
            [
              'StateProvince AS Country_StateProvince_country_id_01',
              'LEFT',
              [
                'id',
                '=',
                'Country_StateProvince_country_id_01.country_id',
              ],
            ],
          ],
          'having' => [],
        ],
      ],
      'match' => ['name'],
    ],
  ],
  [
    'name' => 'SavedSearch_Senate_Example_Country_Search_SearchDisplay_Senate_Example_Country_Search_Table_1',
    'entity' => 'SearchDisplay',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Senate_Example_Country_Search_Table_1',
        'label' => E::ts('Example Country Search Table Display'),
        'saved_search_id.name' => 'Senate_Example_Country_Search',
        'type' => 'table',
        'settings' => [
          'description' => E::ts(''),
          'sort' => [],
          'limit' => 50,
          'pager' => [],
          'placeholder' => 5,
          'columns' => [
            [
              'type' => 'field',
              'key' => 'name',
              'dataType' => 'String',
              'label' => E::ts('Country'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'GROUP_CONCAT_Country_StateProvince_country_id_01_name',
              'dataType' => 'String',
              'label' => E::ts('(List) Country States/Provinces: State'),
              'sortable' => TRUE,
            ],
          ],
          'actions' => FALSE,
          'classes' => ['table', 'table-striped'],
        ],
      ],
      'match' => [
        'saved_search_id',
        'name',
      ],
    ],
  ],
];
