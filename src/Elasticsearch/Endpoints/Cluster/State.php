<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Endpoints\Cluster;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class State
 * Elasticsearch API name cluster.state
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 7.12.0-SNAPSHOT (8532092b1b040934004e863c98b261c8cc71817b)
 */
class State extends AbstractEndpoint
{
    protected $metric;

    public function getURI(): string
    {
        $metric = $this->metric ?? null;
        $index = $this->index ?? null;

        if (isset($metric) && isset($index)) {
            return "/_cluster/state/$metric/$index";
        }
        if (isset($metric)) {
            return "/_cluster/state/$metric";
        }
        return "/_cluster/state";
    }

    public function getParamWhitelist(): array
    {
        return [
            'local',
            'master_timeout',
            'flat_settings',
            'wait_for_metadata_version',
            'wait_for_timeout',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setMetric($metric): State
    {
        if (isset($metric) !== true) {
            return $this;
        }
        if (is_array($metric) === true) {
            $metric = implode(",", $metric);
        }
        $this->metric = $metric;

        return $this;
    }
}
