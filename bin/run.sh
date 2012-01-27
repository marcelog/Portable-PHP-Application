#!/bin/bash
me=$(dirname ${0})
root=$(readlink -f ${me}/..)
. ${root}/config/cli.properties

if [ ${#@} -lt 1 ]; then
    echo "Missing php script name"
    exit 254
fi

what=${1}
shift
${phpexec} ${bin}/${what}.php ${@}
