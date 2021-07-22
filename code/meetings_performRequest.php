<? php
private function performRequest($endpoint, array $params = array(), array $options = [])
{
    $uri = 'api/'.$endpoint.'?'.$this->buildQueryString($params);
    .
    ...
    .
    $method = (is_array($options) && count($options)) ? 'POST' : 'GET';
    $request = $this->client->request($method, $this->url .'/'. $uri, $options);
    return $request->getBody(true);
}
