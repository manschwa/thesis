<?php
public function createMeeting(MeetingParameters $parameters)
{
    $params = array(
        'name' => $parameters->getMeetingName(),
        'meetingID' => $parameters->getRemoteId() ?: $parameters->getMeetingId(),

        // ...
    );

    // ...
    $response = $this->performRequest('create', $params, $options);

    $xml = new \SimpleXMLElement($response);
    // ...
    return isset($xml->returncode) && strtolower((string)$xml->returncode) === 'success';
}

private function performRequest($endpoint, array $params = array(), array $options = [])
{
    $uri = 'api/'.$endpoint.'?'.$this->buildQueryString($params);

    //...

    $method = (is_array($options) && count($options)) ? 'POST' : 'GET';
    $request = $this->client->request($method, $this->url .'/'. $uri, $options);
    return $request->getBody(true);
}
