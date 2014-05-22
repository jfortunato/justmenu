<?php namespace JustMenu\Config;

class Config
{
    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function get($key, $default = null)
    {
        if (isset($this->config[$key])) return $this->config[$key];

        foreach (explode('.', $key) as $segment)
        {
            if ( ! is_array($this->config) || ! array_key_exists($segment, $this->config))
            {
                return value($default);
            }

            $this->config = $this->config[$segment];
        }

        return $this->config;

    }
}
