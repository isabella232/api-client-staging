# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v1/logging/audit_data.proto

import sys
_b=sys.version_info[0]<3 and (lambda x:x) or (lambda x:x.encode('latin1'))
from google.protobuf import descriptor as _descriptor
from google.protobuf import message as _message
from google.protobuf import reflection as _reflection
from google.protobuf import symbol_database as _symbol_database
from google.protobuf import descriptor_pb2
# @@protoc_insertion_point(imports)

_sym_db = _symbol_database.Default()


from google.api import annotations_pb2 as google_dot_api_dot_annotations__pb2
from google.iam.v1 import policy_pb2 as google_dot_iam_dot_v1_dot_policy__pb2


DESCRIPTOR = _descriptor.FileDescriptor(
  name='google/iam/v1/logging/audit_data.proto',
  package='google.iam.v1.logging',
  syntax='proto3',
  serialized_pb=_b('\n&google/iam/v1/logging/audit_data.proto\x12\x15google.iam.v1.logging\x1a\x1cgoogle/api/annotations.proto\x1a\x1agoogle/iam/v1/policy.proto\"=\n\tAuditData\x12\x30\n\x0cpolicy_delta\x18\x02 \x01(\x0b\x32\x1a.google.iam.v1.PolicyDeltaB\x89\x01\n\x19\x63om.google.iam.v1.loggingB\x0e\x41uditDataProtoP\x01Z<google.golang.org/genproto/googleapis/iam/v1/logging;logging\xaa\x02\x1bGoogle.Cloud.Iam.V1.Loggingb\x06proto3')
  ,
  dependencies=[google_dot_api_dot_annotations__pb2.DESCRIPTOR,google_dot_iam_dot_v1_dot_policy__pb2.DESCRIPTOR,])




_AUDITDATA = _descriptor.Descriptor(
  name='AuditData',
  full_name='google.iam.v1.logging.AuditData',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='policy_delta', full_name='google.iam.v1.logging.AuditData.policy_delta', index=0,
      number=2, type=11, cpp_type=10, label=1,
      has_default_value=False, default_value=None,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      options=None),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=123,
  serialized_end=184,
)

_AUDITDATA.fields_by_name['policy_delta'].message_type = google_dot_iam_dot_v1_dot_policy__pb2._POLICYDELTA
DESCRIPTOR.message_types_by_name['AuditData'] = _AUDITDATA
_sym_db.RegisterFileDescriptor(DESCRIPTOR)

AuditData = _reflection.GeneratedProtocolMessageType('AuditData', (_message.Message,), dict(
  DESCRIPTOR = _AUDITDATA,
  __module__ = 'google.iam.v1.logging.audit_data_pb2'
  ,
  '__doc__' : """Audit log information specific to Cloud IAM. This message is serialized
  as an ``Any`` type in the ``ServiceData`` message of an ``AuditLog``
  message.
  
  
  Attributes:
      policy_delta:
          Policy delta between the original policy and the newly set
          policy.
  """,
  # @@protoc_insertion_point(class_scope:google.iam.v1.logging.AuditData)
  ))
_sym_db.RegisterMessage(AuditData)


DESCRIPTOR.has_options = True
DESCRIPTOR._options = _descriptor._ParseOptions(descriptor_pb2.FileOptions(), _b('\n\031com.google.iam.v1.loggingB\016AuditDataProtoP\001Z<google.golang.org/genproto/googleapis/iam/v1/logging;logging\252\002\033Google.Cloud.Iam.V1.Logging'))
try:
  # THESE ELEMENTS WILL BE DEPRECATED.
  # Please use the generated *_pb2_grpc.py files instead.
  import grpc
  from grpc.beta import implementations as beta_implementations
  from grpc.beta import interfaces as beta_interfaces
  from grpc.framework.common import cardinality
  from grpc.framework.interfaces.face import utilities as face_utilities
except ImportError:
  pass
# @@protoc_insertion_point(module_scope)
